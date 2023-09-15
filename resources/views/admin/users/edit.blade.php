@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
    <div class="bg-white shadow-lg rounded overflow-hidden">
        <div class="px-6 py-4">
            <h1 class="h5">Nombre:</h1>
            <p class="form-control">{{$user->name}}</p>

            <h1 class="h5">Lista de roles</h1>

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('asignar rol', ['class' => 'bg-blue-50 font-bold py-2 px-4 rounded text-white mt-2']) !!}

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