@component('mail::message')
Hello Admin

A trip request has been made

Departure: {{ $departure }}

Arrival: {{ $arrival }}

Date: {{ $date }}

Class: {{ $class }}

Email: {{ $email }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
