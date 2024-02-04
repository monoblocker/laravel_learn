@extends("layouts.main")
@section("content")
    <div class="max-w-xs">
        <form class="rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{route("movie.store")}}">
            @csrf
            <div class="mb-4">
                <input name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Название фильма">
            </div>
            <div class="mb-6">
                <input name="description" class="appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" placeholder="Описание">
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Создать
            </button>
        </form>
    </div>
@endsection
