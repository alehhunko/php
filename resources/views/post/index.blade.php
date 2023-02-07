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
<div class="mt-3">
    {{$posts->withQueryString()->links()}}
</div>
<form action="{{route('post.index')}}" method="CET">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Seach Text">
        <button type="submit" class="btn btn-primary">Seach</button>
    </div>

</form>
@endsection