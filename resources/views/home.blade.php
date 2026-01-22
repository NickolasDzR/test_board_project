@extends('layouts.app')

@section('title', 'Мои объявления')

@section('content')
    <div class="container">
        <br>
        <p class="text-start">Текущий юзер: {{ $email }}</p>
        <a class="mb-3 d-block" href="{{ route('create') }}">Добавить объявление</a>

        @if(count($bbs) > 0)
            <table>
                <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, руб.</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bbs as $bb)
                    <tr>
                        <td>
                            <h3>
                                {{ $bb->title }}
                            </h3>
                        </td>
                        <td>
                            {{ $bb->price }}
                        </td>
                        <td>
                            <a href="{{ route('edit', [$bb]) }}">
                                Изменить
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('delete', [$bb]) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить Статью {{ $bb->title }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
