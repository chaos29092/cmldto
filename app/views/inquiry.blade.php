@extends('master')
@section('header')<h2>Inquiry</h2>@stop
@section('content')

<table class="table-striped table">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Product</th>
    </tr>
@foreach($inquiry as $inquiry)
<tr>
    <td>{{ $inquiry->id }}</td>
    <td>{{ $inquiry->email }}</td>
    <td>{{ $inquiry->subject }}</td>
    <td>{{ $inquiry->message }}</td>
    <td>{{ $inquiry->product }}</td>
</tr>
@endforeach
</table>

@stop