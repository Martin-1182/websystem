@component('mail::message')
# Nová správa od  {{ $data['name'] }}

{{ $data['message'] }}
<br><hr>
 Email: <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
#
Ďakujeme,<br>
{{ config('app.name') }}
@endcomponent
