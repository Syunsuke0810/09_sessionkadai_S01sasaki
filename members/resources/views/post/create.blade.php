<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            生成AI画像を投稿してね
        </h2>
        {{-- @if(session('message'))
        {{session('message')}}
        @endif --}}
        <x-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')"/>
    </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                <label for="title" class="font-semibold leading-none mt-4">タイトル</label>
                <input type="text" name="title" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="title" value="{{old('title')}}" placeholder="Enter Title">

                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold leading-none mt-4">使用したAIソフトと指示した内容を教えてね</label>
                <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('body')}}</textarea>
            </div>

            <div class="w-full flex flex-col">
                <label for="image" class="font-semibold leading-none mt-4">画像はここ </label>
                <div>
                <input id="image" type="file" name="image">
                </div>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>

        </form>
    </div>
</div>

</x-app-layout>
