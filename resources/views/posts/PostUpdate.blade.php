@extends('base')

@section('title')
Post Update
@endsection

@section('content')

<div class="container">
        <h1>Post Update</h1>
    <form method="POST" action="/post/update/{{$post['id']}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{$post['title']}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" name="content" value="{{$post['content']}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection