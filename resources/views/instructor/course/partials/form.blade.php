<div class="mb-4 text-gray-900">
    {!! Form::label('title', 'Titulo del curso:') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4 text-gray-900">
    {!! Form::label('slug', 'Slug del curso:') !!}
    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4 text-gray-900">
    {!! Form::label('subtitle', 'Subtitulo del curso:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4 text-gray-900">
    {!! Form::label('description', 'Descripción del curso:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="grid grid-cols-3 gap-4 text-gray-900">
    <div>
        {!! Form::label('category_id', 'Categoria:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Niveles:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precios:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 text-gray-900">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4 text-gray-900">
    <figure>
        @isset($course)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/4497761/pexels-photo-4497761.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        @endisset
    </figure>

    <div>
        <p class="mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur iure animi natus quas quisquam repellendus! Quis unde dicta aut totam voluptatum blanditiis exercitationem obcaecati nesciunt et facilis. Qui, totam.</p>
        {!! Form::file('file', ['class' => 'form-input w-full', 'id' => 'file']) !!}
    </div>
</div>