@component('mail::message')
# New Contact Form Submission

**Name:** {{ $name }}
**Email:** {{ $email }}
**Phone:** {{ $phone }}
**Subject:** {{ $subject }}

Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
