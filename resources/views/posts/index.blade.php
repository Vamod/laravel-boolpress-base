@extends('layouts.app')
@section('content')
    <h2>Elenco Post</h2>
    @if (session('status'))
    <div class="alert alert-success">
         {{ session('status') }}
    </div>
    @endif
    @foreach ($posts as $post)
        <div>
            <p><strong>Titolo</strong>:{{ $post->title }}</p>
            <p><strong>Post</strong>:{{ $post->body }}</p>
        </div>
    @endforeach

@endsection
