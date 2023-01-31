@extends('layouts/main')
@section('contents')

<form action="{{route('post.update', $post->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="post_content" id="content">{{ $post->post_content }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image" value="{{ $post->image }}">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category_id">
            @foreach ($categories as $item)
            <option {{$item->id===$post->category_id ? 'selected':''}}
                value="{{ $item->id }}"
                >
                {{ $item->title }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection