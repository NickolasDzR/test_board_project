@php

    $currentButtonText = $buttonText ?? 'Создать';
    $currentButtonClass = $buttonClass ?? '';

@endphp

<div class="mb-3">
    {{  html()->label('Название', 'title')->class('form-label') }}
    {{  html()->input('text', 'title')->class('form-control') }}
    @error('title')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

<div class="mb-3">
    {{  html()->label('Содержание', 'content')->class('form-label') }}
    {{  html()->textarea('content')->class('form-control') }}
    @error('content')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

<div class="mb-3">
    {{  html()->label('Стоимость', 'price')->class('form-label') }}
    {{  html()->input('text', 'price')->class('form-control') }}
    @error('price')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

{{ html()->submit($currentButtonText)->class($currentButtonClass) }}
