@php

    $currentButtonText = $buttonText ?? 'Создать';
    $currentButtonClass = $buttonClass ?? '';

@endphp

<div class="mb-3">
    {{  html()->label('Название', 'title')->class('form-label') }}
    {{  html()->input('text', 'title')->class('form-control') }}
    @error('name')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

<div class="mb-3">
    {{  html()->label('Содержание', 'content')->class('form-label') }}
    {{  html()->textarea('content')->class('form-control') }}
    @error('body')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

<div class="mb-3">
    {{  html()->label('Стоимость', 'price')->class('form-label') }}
    {{  html()->input('text', 'price')->class('form-control') }}
    @error('name')
        <p class="alert alert-danger">{{ $message  }}</p>
    @enderror
</div>

{{ html()->submit($currentButtonText)->class($currentButtonClass) }}
