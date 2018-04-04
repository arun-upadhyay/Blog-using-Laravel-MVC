@extends('layouts.main')
@section('content')
<h1> Contents of Articles <h1>
        <h1><a href="add-new-article">Add New</a></h1>
        @if(count($contents)>0)
        @foreach ($contents as $c)
        <h1><a href="articles/{{$c->id}}">{{ $c->title }} </a></h1>

        <div>
            <a href="edit-article/{{$c->id}}">Edit </a>
            <a href="delete-article/{{$c->id}}">Delete </a>
        </div>
        <label>{{ $c->created_at->format('M j, Y') }}</label>
        <p class="ArticleBody">
            {{ str_limit(strip_tags($c->content), 500) }}
            @if (strlen(strip_tags($c->content)) > 500)
        <div>
            <a href="/articles/{{ $c->id }}" class="btn btn-info btn-sm" >Read More</a>
        </div>
        @endif
        </p>
        @endforeach
        @else 
        <p> Sorry !!! No articles Available
            @endif
            @if(count($contents)>0)
        <div class="text-center">
            {!! $contents->links() !!}
        </div>
        @endif
        @stop