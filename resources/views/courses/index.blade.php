<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/technology-1283624_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/ lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Muchos cursos de programacion con buenos graficos y en español.</h1>
                <p class="text-white text-lg mt-2 mb-4">En esta categoria podras elejir el lenguaje de programacion que mas quieras apender y saber como programar con los amplios y complejos lenguajes de programacion.</p>

                @livewire('search')

            </div>
        </div>
    </section>

    @livewire('courses-index')

</x-app-layout>