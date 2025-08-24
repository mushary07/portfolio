@component('mail::message')
    # New Contact Form Submission

    **Name:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}
    **Subject:** {{ $data['subject'] }}

    ---

    {{ $data['message'] }}
@endcomponent
