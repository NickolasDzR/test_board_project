@extends('layouts.app')

@section('title', $board->title)

@section('content')
    <h1 style="margin-bottom: 0">{{ $board->title  }}</h1>
    <p style="margin-block-start: 3px; margin-block-end: 3px;">{{ $board->content }}</p>
    <span>{{ $board->price }}</span>
    <br>
    <a href="{{ route('board.index') }}">Назад</a>
    <br>
    <br>
@endsection
