@extends('layouts.app')

@section('title', 'Добавление объявления:: Мои объявления')

@section('content')
    <div class="container">
        {{ html()->modelForm($bb, 'POST', route('store'))->open()  }}
            @include('form.create_board', ['buttonText' => 'Создать', 'buttonClass' => 'btn btn-primary'])
        {{ html()->closeModelForm()  }}
    </div>
@endsection
