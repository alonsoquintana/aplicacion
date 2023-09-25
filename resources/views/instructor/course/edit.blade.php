<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-5 text-gray-900 ">

        <aside>
            <h1 class="font-bold text-lg mb-4">Edicion del curso</h1>

            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Información del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Lecciones del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Metas del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Estudiantes</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 bg-white shadow-lg rounded overflow-hidden">

            <div class="px-6 py-4 text-gray-600">
                <h1 class="text-2xl font-bold">INFORMACIÓN DEL CURSO</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}

                    @include('instructor.course.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar información', ['class' => 'font-bold py-2 px-4 rounded bg-blue-500 text-white']) !!}
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