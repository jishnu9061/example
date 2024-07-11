
@component('mail::message')
# New Enquiry Form Submission

**Name:** {{ $name }}
**Email:** {{ $email }}
**Phone:** {{ $phone }}

Message:
{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
