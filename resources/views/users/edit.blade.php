@extends('layouts.main')

@section('content')

<h1>Editar Usuario</h1>
<div class="alert alert-primary" role="alert">
@if (session()->has('info'))
    {{session('info')}}
@endif
</div>

    <form method="post" action="{{ route('users.update',$user->id) }}">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}

        <p><label for="name">
            Nombre
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" 
            value="{{ $user->name }}"  >
         
            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </label>
        </p>

        <p><label for="email">
            Email
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" >
            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </label>
        </p>

        <button type="submit" class="btn btn-primary"> Guardar</button>
    </form>

@stop