@extends('layouts.app')
@section('content')
    @if (session('status'))
    <div class="alert alert-success">
        Profilo cancellato n: {{ session('status') }}
    </div>
    @endif
    <h2>Elenco utenti</h2>
    @foreach ($users as $user)
        <ul>
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            {{-- user fa da ponte alla tabella avatar,che mi restituisce tutta tabella avatar --}}
            <li>{{ $user->avatar->avatar }}</li>
            <li>{{ $user->avatar->telefono }}</li>
            <li><a href="{{ route('users.show', $user->id )}}">Dettagli</a></li>
        </ul>
    @endforeach
@endsection
