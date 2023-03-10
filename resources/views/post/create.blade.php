@extends('layouts/main')
@section('contents')

<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
            value="{{ old('title') }}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="post_content" id="content"
            placeholder="Enter Content">{{ old('post_content') }}</textarea>
        @error('post_content')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Enter image"
            value="{{ old('image') }}">
        @error('image')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category_id">
            @foreach ($categories as $item)
            <option {{ old('category_id')==$item->id ? 'selected':'' }}
                value="{{ $item->id }}">{{ $item->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tags">Tags</label>
        <select multiple class="form-control" id="tags" name='tags[]'>
            @foreach($tags as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection