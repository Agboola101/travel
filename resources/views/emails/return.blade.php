@component('mail::message')
Hello Admin

A trip return request has been made

Departure: {{ $departure }}

Arrival: {{ $arrival }}

Departure Date: {{ $depart_date }}

Return Date: {{ $return_date }}

Class: {{ $class }}

Email: {{ $email }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
