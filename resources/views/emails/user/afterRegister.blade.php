@component('mail::message')
# Welcome

Hi, {{ $user->name }}
<br>
Welcome to Laracamp, your account has been created successfully.Now your can choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login Hire
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
