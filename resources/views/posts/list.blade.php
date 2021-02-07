@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        {{$post->title}}
        @comments(['model' => $post])
    @endforeach
</div>
@endsection
