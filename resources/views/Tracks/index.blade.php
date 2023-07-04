<x-app-layout>
        <x-slot name='header'>
          <div class="flex justify-between"> 
               <h2>
                  {{__('SONG LIST')}}
               </h2>

               <a href="{{ route('Players.create') }}" class="bg-sky-300 py-2 px-4 rounded">
                  {{__('INSERT SONG')}}
               </a>
         </div>
        </x-slot>
      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900 dark:text-gray-100">
                     <div class="grid grid-cols-3 gap-4">
                         @if ($Tracks->count())
                              @foreach ($Tracks as $Track)
                                 <div>
                                    <div>
                                      {{__('Title')}}  {{$Track->title}}
                                    </div>
                                    <div>
                                          {{__('Singer ID :')}} {{$Track->pla_id}} 
                                    </div>
                                    <div>
                                          <audio controls>
                                             <source src="{{$Track->getUrl()}}" type="audio/mp3">
                                          </audio>
                                    </div>
                                    <div class="flex  ">
                                       <div>
                                       <a class="flex bg-red-500 m-2 p-3 rounded-full w-max" href="#">{{__('DELETE')}}</a>
                                       </div>
                                       <div>
                                       <a class="flex bg-yellow-500 m-2 p-3 rounded-full " href="#">{{__('EDIT')}}</a>
                                       </div>
                                    </div>

                                 </div>
                              @endforeach
                           @else
                              <div>
                                  {{__('The Players list is empty.') }}
                              </div>
                           @endif
                        </div>
                     </div>
               </div>
         </div>
     </div>
        
</x-app-layout>