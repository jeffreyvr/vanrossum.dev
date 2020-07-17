@component('mail::layout')
{{-- Header --}}
@slot('header')
<!-- header here -->
@endslot

{{-- Body --}}
<strong>{{ __('Name') }}</strong><br>
{{ $name }}

<strong>{{ __('Email') }}</strong><br>
{{ $email }}

<strong>{{ __('Message') }}</strong><br>
{{ $message }}

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
{{ __('This email was sent by :app_name.', ['app_name' => config('app.name')]) }}
@endcomponent
@endslot
@endcomponent