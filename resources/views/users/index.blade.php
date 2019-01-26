@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
    <h1>Usuarios</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Role</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{$user->id }}</th>
                    <th>{{$user->name}}</th>
                    <th>{{ $user->email}} </th>
                    @foreach($user->roles as $role)
                    <th>{{ $role->name}} </th>
                    @endforeach
                    <th>
                        <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>

                        <form method="post" action="{{ route('users.destroy',$user->id)}}">
                         {!!  csrf_field() !!}
                         {!! method_field('DELETE') !!}
                        </form>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
            </div>
        </div>
    </div>
</div>
@stop
