@extends('components.layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Edit Client</h2>
    <form action="{{ route('clients.update', $client->id) }}" method="POST" class="bg-light p-4 rounded">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="first_name" value="{{ $client->first_name }}" class="form-control" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="last_name" value="{{ $client->last_name }}" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="phone_number" value="{{ $client->phone_number }}" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="mb-3">
            <input type="text" name="firm" value="{{ $client->firm }}" class="form-control" placeholder="Firm">
        </div>
        <div class="mb-3">
            <input type="text" name="address" value="{{ $client->address }}" class="form-control" placeholder="Address">
        </div>
        <div class="mb-3">
            <input type="number" name="balance" value="{{ $client->balance }}" class="form-control" placeholder="Balance" required>
        </div>
        <button type="submit" class="btn btn-success">Update Client</button>
    </form>
</div>
@endsection
