<x-mail::message>
# Message from {{ $contactMessage['name'] }}
## Email: {{ $contactMessage['email'] }}

{{ $contactMessage['message'] }}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
