@extends('layouts.app')

@section('content')
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class' => 'form-control','id'=>'article-ckeditor','placeholder'=>'Body text'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection