@extends('base')

@section('title')
Post Create
@endsection

@section('content')

<div class="container">
        <h1>Post Create</h1>
    <form method="POST" action="/post/create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" name="content" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

@endsection