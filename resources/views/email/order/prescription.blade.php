@component('mail::message')

# Prescription submitted

<b>User Details:</b><br/>
<b>From: </b> {{ $user->name }}<br>
<b>Email: </b> {{ $user->email }}<br>
<b>Phone: </b> {{ $user->phone }}<br>
<b>Prescription:</b><br /><a href="http://onlineaushadhi.com/storage/app/{{$prescription}}" target="_blank"><img src="http://onlineaushadhi.com/storage/app/{{$prescription}}" height="200" /></a>

<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
