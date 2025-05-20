@extends('admin.layout')

@section('content')
<div class="container py-5">
    <h2>Messages</h2>

    @if($messages->isEmpty())
        <p>No messages found.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Issue</th>
                <th>Message</th>
                <th>Received At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->issue_type }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
