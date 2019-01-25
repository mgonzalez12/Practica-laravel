
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
                    <th>{{ $user->role->name}} </th>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
            </div>
        </div>
    </div>
</div>
