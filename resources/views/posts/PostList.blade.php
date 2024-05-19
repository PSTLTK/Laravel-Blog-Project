@extends('base')

@section('title')
Post List
@endsection

@section('content')

<div class="container">
    <h1>Post List</h1>
    @foreach($posts as $p)
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$p->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$p['title']}}</h5>
            <p class="card-text">{{$p['content']}}</p>
            <a href="/post/detail/{{$p['id']}}" class="btn btn-primary">Detail</a>
        </div>
    </div>
    @endforeach
</div>

@endsection