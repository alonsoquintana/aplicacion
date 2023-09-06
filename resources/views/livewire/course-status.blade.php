<div class="mt-8">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
        <div class="col-span-2 text-gray-900">
            {!!$current->iframe!!}
            {{$current->name}}
        </div>

        <div class="bg-white shadow-lg rounded overflow-hidden">
            <div class="px-6 py-4">
                <h1 class="text-gray-900">{{$course->title}}</h1>

                <div class="flex items-center">
                    <figure>
                        <img src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>

                    <div class="text-gray-900">
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-blue-500" href="">{{'@' . Str::slug($course->teacher->name, '')}}</a>
                    </div>
                </div>

                <ul class="text-gray-900">
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <a href="">{{$lesson->id}} @if ($lesson->completed)
                                            (Completado)
                                        @endif</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
