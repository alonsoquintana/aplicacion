<div>
    <div class="bg-white shadow-lg rounded overflow-hidden">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Escriba un nombre">
        </div>

        @if ($users->count())

            <div class="px-6 py-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a class="bg-blue font-bold py-2 px-4 rounded text-white" href="{{route('admin.users.edit', $user)}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>

        @else

            <div class="px-6 py-4">
                <strong>No hay registros ¯\_(ツ)_/¯</strong>
            </div>

        @endif

    </div>
</div>
 