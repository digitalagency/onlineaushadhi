@component('mail::message')
<style>
    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
# New order request from website

<b>From: </b> {{ $user->name }}<br>
<b>Email: </b> {{ $user->email }}<br>
<b>Phone: </b> {{ $user->phone }}<br>

<b>Order Details Below:</b>
<table cellpadding="5">
    <thead>
        <tr style="background: #8e8e8e;color:#fff;">
            <td>Medicine ID</td>
            <td>Name</td>
            <td>Quantity</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $product)
            <tr>
                <td>{{ $product['medicine_id'] }}</td>
                <td>{{ $product['medicine_name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
