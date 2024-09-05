<x-mail::message>
Hello {{$user->name}},

Your Account has been created successfully.
**Here is your login information:** <br>
Email: {{ $user->email }} <br>
Password: {{$password}}
Please login to the system and change your password
<x-mail::button url="{{ route('login')}}">
Clck here to login
</x-mail::button>

Thank you, <br>
{{ config('app.name')}}
</x-mail::message>
