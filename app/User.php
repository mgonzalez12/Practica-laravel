<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany( 'App\Models\Role','assigned_roles');
    }

    public function hasRoles(array $roles)
    {
       
       foreach ($roles as $role)
       {
           foreach($this->roles as $userRole){
                if($userRole->name === $role){
                    return  true;
                }
            }
       }
        return false;
    }


}
