@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3 text-center">
            Объявления
        </h1>

        @if (count($boards))
            <table class="table table-striped table-borderless">
                <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, руб.</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($boards as $board)
                    <tr>
                        <td>
                            <h4>
                                {{ $board->title  }}
                            </h4>
                        </td>
                        <td>
                            {{ $board->price }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('board.show', $board) }}">Подробнее...</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
