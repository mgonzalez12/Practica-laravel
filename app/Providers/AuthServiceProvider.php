<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }

    public function before($user,$ability){
        if($user->hasRoles(['estudiantes'])){
            return true;
        }
    } 

    public function edit(User $authUser,User $user){
        return $authUser->id === $user->id;
    }

    public function update(User $authUser,User $user){
        return $authUser->id === $user->id;
    }
}
