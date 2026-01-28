@extends('layouts.app')

@section('title', $bb->title)

@section('content')
    <div class="container">
        <h1 style="margin-bottom: 0">{{ $bb->title  }}</h1>
        <p style="margin-block-start: 3px; margin-block-end: 3px;">{{ $bb->content }}</p>
        <span>{{ $bb->price }}</span>
        <p>Автор: {{ $bb->user->name  }}</p>
        <a href="{{ route('index') }}">Назад</a>
    </div>
@endsection
