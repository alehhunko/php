@extends('layouts/main')
@section('contents')
<div>
    <a class="nav-item nav-link" href="{{route('post.create')}}">New Post</a>
</div>
@foreach ($posts as $item)
<div>
    <a href="{{route('post.show', $item->id)}}">{{ $item->id }}. {{ $item->title }}</a>
</div>
@endforeach
@endsection