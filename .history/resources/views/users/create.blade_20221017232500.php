@extends('users.layout')

@section('content')
    <h2>Add New User</h2>
    <a href="{{ route('users.index') }}">Back</a>
    <br /><br />

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <strong>Name:</strong>
        <input type="text" name="name" placeholder="Name" />
        <br />

        <strong>Email:</strong>
        <input type="text" name="email" placeholder="Email" />
        <br /><br />

        <strong>Password:</strong>
        <input type="text" name="password" minlength="8" placeholder="Password" />
        <br /><br />

        <button type="submit">Submit</button>
    </form>
@endsection