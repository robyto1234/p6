<div class="text-center font-semibold text-black">
    {{ __($title) }}
</div>
<form class="mt-8" action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf
    @isset($music)
        @method('PUT')
    @endisset
    <div class="mx-auto max-w-lg ">
       
        <div class="py-1">
            <span class="px-1 text-sm text-gray-600">
                {{ __('Title') }}
            </span>
            <input type="text" name="title"
                @isset($Track) value="{{ $Track->title }}" @endisset
                class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
            @error('title')
                <div class="text-xs text-red-500 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="py-1">
            <span class="px-1 text-sm text-gray-600">
                {{ __('Music') }}
            </span>
            <div class="flex justify-between items-center gap-2">
                @isset($Track)
                    <audio class="w-10 h-10 rounded-full" src="{{ $Track->getUrl() }}">
                @endisset
                <input type="file" name="audio"
                    class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
            </div>
            @error('audio')
                <div class="text-xs text-red-500 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit"
            class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
            {{ __($button) }}
        </button>
    </div>
</form>
