@component('mail::message')
Hello Shola

A trip request has been made

<h2>Departure</h2>: {{ $departure }}
<h2>arrival</h2>: {{ $arrival }}
<h2>date</h2>: {{ $date }}
<h2>class</h2>: {{ $class }}
<h2>email</h2>: {{ $email }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
