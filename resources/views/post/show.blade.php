@extends('layouts/main')
@section('contents')
<div>
    {{ $post->id }}. {{ $post->title }}<br />
    {{ $post->post_content}}<br />
    {{ $post->image }}
</div>
<div>
    <a href="{{route('post.index')}}">Back</a>
    <a href="{{route('post.edit', $post->id)}}">Edit</a>
</div>
<div>
    <form action="{{route('post.delete', $post->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
</div>
@endsection