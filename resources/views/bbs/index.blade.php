@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3 text-center">
            Объявления
        </h1>

        @if (count($bbs))
            <table class="table table-striped table-borderless">
                <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, руб.</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($bbs as $bb)
                    <tr>
                        <td>
                            <h4>
                                {{ $bb->title  }}
                            </h4>
                        </td>
                        <td>
                            {{ $bb->price }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('show', $bb) }}">Подробнее...</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
