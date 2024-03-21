@extends('layouts.app')

@section('content')

    <div class="grid grid-cols-2 lg:grid-cols-4">
    @foreach($posts as $post)

        <div class="aspect-square">
            <img class="w-full h-full object-cover" src="{{ $post->image_url }}" alt="">
        </div>




    @endforeach
    </div>

@endsection
