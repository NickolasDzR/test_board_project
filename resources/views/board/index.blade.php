@extends('layouts.app')

@section('content')
    Объявления о продаже:
    <br>

    @foreach ($boards as $board)
        <h1 style="margin-bottom: 0">{{ $board->title  }}</h1>
        <p style="margin-block-start: 3px; margin-block-end: 3px;">{{ $board->content }}</p>
        <span>{{ $board->price }}</span>
        <br>
        <a href="{{ route('board.show', $board) }}">Перейти в объявление</a>
        <br>
        <br>
    @endforeach
@endsection
