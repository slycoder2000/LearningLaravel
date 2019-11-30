@extends('layouts.app')

@section('content')
@include('inc.ckeditor_start') 

<h1>Edit Post</h1>


{!! Form::open(['action' => ['PostsController@update', $post->id, 'method'=> 'POST'], 'files' => true]) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=>'Title'])}}

    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id'=>'editor', 'class' => 'form-control', 'placeholder'=>'Body Text'])}}
        {{Form::hidden('_method','PUT')}}

    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@include('inc.ckeditor_end')

@endsection