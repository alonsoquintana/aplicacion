@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    <div class="bg-white shadow-lg rounded overflow-hidden">
        <div class="px-6 py-4">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                @include('admin.roles.partials.form')


                {!! Form::submit('Actualizar Role', ['class' => 'btn btn-primary mt-2']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop