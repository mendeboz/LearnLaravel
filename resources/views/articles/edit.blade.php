@extends('articles.main')

@section('content')
    <h3>Create new article</h3>
    <hr>

    {!! Form::model($article,['method'=>'PATCH','url'=>'articles/'.$article->id,'class'=>'form-horizontal']) !!}

    @include('articles.form',['button'=>"Update article"])

    {!! Form::close() !!}

    @include('articles.errors.errors')


@stop

