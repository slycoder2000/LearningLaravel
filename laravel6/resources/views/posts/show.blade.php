@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="/posts" role="button">Go Back</a>
<h1>{{$post->title}}</h1>


            <div >
            {!!$post->body!!}
    </div>
    <hr>

    <small>Written on {{$post->created_at}} </small>

    @endsection