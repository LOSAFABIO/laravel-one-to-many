@extends('layouts.app')

@section('title','lista post')

@section('content')
    <h1>Modifica il post</h1>
    <form action="{{route("admin.posts.update",$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo" value="{{$post->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="post_date">Data_post</label>
            <input type="date" class="form-control-file" id="post_date" name="post_date" value="{{$post->post_date}}">
            @error('post_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" id="author" aria-describedby="price" name="author" placeholder="Inserisci autore" value="{{$post->author}}">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{route("admin.posts.index")}}">
            <button type="button" class="btn btn-primary">Torna indietro</button>
        </a>
        <a href="{{route("admin.posts.index")}}">
            <button type="submit" class="btn btn-success">Salva</button>
        </a>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection