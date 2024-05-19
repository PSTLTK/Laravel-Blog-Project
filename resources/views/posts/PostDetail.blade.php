@extends('base')

@section('title')
Post Detail
@endsection

@section('content')

<div class="container">
    <h1>Post Detail</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post['title']}}</h5>
            <p class="card-text">{{$post['content']}}</p>
            <a href="/post/update/{{$post['id']}}" class="btn btn-primary">Update</a>
            <a href="/post/delete/{{$post['id']}}" class="btn btn-primary">Delete</a>
        </div>
    </div>
</div>

@endsection