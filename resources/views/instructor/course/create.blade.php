<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded overflow-hidden">
            <div class="px-6 py-4">
                <h1 class="text-2xl font-bold text-gray-900">CREAR NUEVO CURSO</h1>

                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'instructor.courses.store', 'files' => true]) !!}
                    @include('instructor.course.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Crear nuevo curso', ['class' => 'font-bold py-2 px-4 rounded bg-blue-500 text-white']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">

        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
            <script src="{{asset('js/instructor/courses/form.js')}}"></script>

    </x-slot>

</x-app-layout>