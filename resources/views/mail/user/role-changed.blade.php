<x-mail::message>
Hello {{$user->name}},

@if ($user->is_admin)
You are now admin
@else
You are no more admin
@endif

Thank you, <br>
{{ config('app.name')}}
</x-mail::message>
