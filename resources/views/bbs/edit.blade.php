@extends('layouts.app')

@section('title', 'Изменение статьи')

@section('content')
    <div class="container">
        {{ html()->modelForm($bb, 'PATCH', route('update', $bb))->open() }}
        @include('form.create_board', ['buttonText' => 'Изменить', 'buttonClass' => 'btn btn-primary'])
        {{ html()->closeModelForm() }}
    </div>
@endsection
