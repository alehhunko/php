@extends('layouts/main')
@section('contents')

<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="post_content" id="content" placeholder="Enter Content"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Enter image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection