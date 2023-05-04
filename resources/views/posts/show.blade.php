<x-layouts.main>

    <x-slot:title>
        Blog page
    </x-slot>


    <x-page-header>
        Blog
    </x-page-header>

    <div class="container">
        <h1>{{$post->title}}</h1>
        <small>{{$post->created_at}}</small>
    </div>
</x-layouts.main>
