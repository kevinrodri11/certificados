@extends('layouts.app')

@section('content')GITH
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
          <h2 >
          Usuarios registrados
          </h2>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5" id="rol">
      <!--Filtro selección de cargo-->
    <select class="p-2" id="filtro">
      @foreach ($roles as $role)
      <option value="{{$role->id}}">
        {{$role->role}}
      </option>
      @endforeach       
    </select>

      <!--Botón para volver-->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></a>
      </div>
    <!--Tabla de historial de los certificados imprimidos o descargados-->
    <div class="container-fluid mt-4">
      <table class="table table-blue text-light table-bordered " id="tabla">
        <thead>
            <tr>
              <th scope="col">Nombre Completo</th>
              <th scope="col">Correo institucional</th>
              <th scope="col">Rol</th>
              <th colspan="2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($users as $user)
          <tr>
            <td scope="col"> {{$user->name}}</td>
            <td scope="col"> {{$user->email}}</td>
            <td scope="col"> {{$user->roles->role}}</td>
            <td><div class="btn-group " role="group" aria-label="Button group name"><a href="{{route('admins.edit', $user->id)}}"> <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen"></i></button></a></td>
            <td><div class="btn-group " role="group" aria-label="Button group name"><a href="{{route('CertificadoLaboral', $user->id)}}"> <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-file-pdf"></i></button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </section>
@endsection
