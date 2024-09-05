<x-mail::message>
Hello {{$user->name}},

@if ($user->blocked_at)
Your account has been suspended
@else
Your account has been activated
<x-mail::button url="{{ route('login')}}">
Clck here to login
</x-mail::button>
@endif

Thank you, <br>
{{ config('app.name')}}
</x-mail::message>
