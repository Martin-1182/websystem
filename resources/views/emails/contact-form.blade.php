@component('mail::message')
# Nová správa od ### {{ $data['name'] }}

{{ $data['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
