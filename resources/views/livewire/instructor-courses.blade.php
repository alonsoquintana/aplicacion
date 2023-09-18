<div class="max-w-7xl mx-auto px-4 py-8">
  <x-table-responsive>

    <div class="px-6 py-4">
      <input class="form-input w-full shadow-sm" placeholder="Ingrese el nombre de un curso">
    </div>

    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
            Nombre
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
            Matriculados
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
            Calificacion
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
            Status
          </th>
          <th scope="col" class="relative px-6 py-3">
            <span class="sr-only">Edit</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">

        @foreach ($courses as $course)
        
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-full" src="{{Storage::url($course->image->url)}}" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">
                    {{$course->title}}
                  </div>
                  <div class="text-sm text-gray-500">
                    {{$course->category->name}}
                  </div>
                </div>
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">{{$course->students->count()}}</div>
              <div class="text-sm text-gray-500">Alumnos matriculados</div>            
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900 flex items-center">
                {{$course->rating}}
                <ul class="flex text-sm ml-2">
                  <li class="mr-1">
                      <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                  </li>
                  <li class="mr-1">
                      <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                  </li>
                  <li class="mr-1">
                      <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                  </li>
                  <li class="mr-1">
                      <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                  </li>
                  <li class="mr-1">
                      <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                  </li>
                </ul>
              </div>
              <div class="text-sm text-gray-500">Valoración del curso</div>            
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg green-100">
                Active
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
          </tr>

        @endforeach
      </tbody>
    </table>

    <div class="px-6 py-4">
      {{$courses->links()}}
    </div>
  </x-table-responsive>


</div>
