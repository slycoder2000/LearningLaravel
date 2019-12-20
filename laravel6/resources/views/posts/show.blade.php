@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="/posts" role="button">Go Back</a>
<h1>{{$post->title}}</h1>


            <div >
            {!!$post->body!!}
    </div>
    <hr>

    <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
    <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)

                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger float-right'])}}
                {!!Form::close()!!}
            @endif
        @endif
    @endsection
