@component('mail::message')
# New contact request from website

<b>From: </b> {{ $contact->name }}<br>
<b>Email: </b> {{ $contact->email }}<br>
<b>Phone: </b> {{ $contact->phone }}<br>
<b>Message: </b> {{ $contact->message }}<br>
<b>Time: </b> {{ $contact->created_at }}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
