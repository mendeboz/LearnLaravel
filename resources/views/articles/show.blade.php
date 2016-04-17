@extends('articles.main')

    @section('content')
        <div class="panel panel-default">
        	  <div class="panel-heading">
        			<h3 class="panel-title">{{$article->title}}</h3>
        	  </div>
        	  <div class="panel-body">
        			<p>{{$article->body}}</p>
                    <p>{{$article->published_at}}</p>
                  <a href="{{url('articles')}}">Back</a> |
                  <a href="{{url("articles/".$article->id."/edit")}}">Edit</a> |
                  <a href="">Delete</a>
        	  </div>
        </div>
    @stop