@extends('layouts.app')
@section('content')
<h2>Dettaglio utente</h2>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    {{-- user fa da ponte alla tabella avatar,che mi restituisce tutta tabella avatar --}}
    <li>{{ $user->avatar->avatar }}</li>
    <li>{{ $user->avatar->telefono }}</li>
</ul>
<h3>Post che ha scritto</h3>
@foreach ($user->posts as $post)
    <div><p>{{ $post->title }}</p></div>
    <div><p>{{ $post->body }}</p></div>
@endforeach
@endsection
