<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded overflow-hidden">
            <div class="px-6 py-4">
                <h1 class="text-2xl font-bold text-gray-900">CREAR NUEVO CURSO</h1>

                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'instructor.courses.']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

</x-app-layout>