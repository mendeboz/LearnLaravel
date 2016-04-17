@extends('articles.main')
@section('content')

    <h3>Articles</h3>

    <a href="{{url("articles/create")}}">Create new article</a>
    <hr>



@foreach( $articles as $article)
    <div class="list-group">

        <a href="{{url('articles',$article->id)}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$article->title}}</h4>
            <p class="list-group-item-text">{{$article->body}}</p>
            <p class="list-group-item-text">{{$article->published_at}}</p>
        </a>
    </div>
@endforeach
@stop