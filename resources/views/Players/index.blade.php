<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between"> 
        <h2>
            {{__('SINGERS LIST')}}
        </h2>
        <a href="{{ route('Players.create') }}" class="bg-blue-300 py-2 px-4 rounded">
            {{__('INSERT SINGERS')}}
        </a>
             </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-3 gap-4">
                        @if ($Players->count())
                            @foreach ($Players as $Player)
                            <div class="bg-gray-200 p-4 rounded">
                                <div class="flex justify-center">
                                    {{$Player->namep}}
                                </div>
                                <div class="flex justify-center mt-3 ">
                                    <div>
                                    <a class="flex bg-red-500 m-2 p-3 rounded-full w-max" href="#">{{__('DELETE')}}</a>
                                    </div>
                                    <div>
                                    <a class="flex bg-yellow-500 m-2 p-3 rounded-full " href="{{ route('Players.edit', ['Player' => $Player]) }}">{{__('EDIT')}}</a>
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