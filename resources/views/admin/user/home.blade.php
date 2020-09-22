@extends('admin.master')
@section('title', 'Usuarios')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/user')}}"><i class="fas fa-users" ></i> User</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users" ></i> User</h2>
        </div>

        <div class="inside">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->ROLE }}</td>
                            <td> <a href="{{ url('admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip" title="Editar" data-placement="top"><i class="fas fa-edit"></i></a></td>
                            <td> <a href="{{ url('admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip" title="Eliminar" data-placement="top"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection