@extends('articles.main')

@section('content')
    <h3>Create new article</h3>
    <hr>

    {!! Form::open(['url'=>'articles','class'=>'form-horizontal']) !!}

    @include('articles.form',['button'=>'Create article'])

    {!! Form::close() !!}

    @include('articles.errors.errors')

@stop