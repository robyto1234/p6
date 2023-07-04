<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <div class="flex justify-center ">
                        <div>
                        <a class="flex bg-cyan-500 m-2 p-3 rounded-full w-max" href="{{route('Tracks.index')}}">{{__('SONGS')}}</a>
                        </div>
                        <div>
                        <a class="flex bg-lime-500 m-2 p-3 rounded-full " href="{{route('Players.index')}}">{{__('SINGER')}}</a>
                        </div>
                   </div>

                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
