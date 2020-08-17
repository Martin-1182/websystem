@component('mail::message')
<br>

#  Správa od:{{ $data['name'] }}

{{ $data['message'] }}

{{ $data['name'] }} &nbsp; <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>

@component('mail::button', ['url' => '/'])
Button Text
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent
