@extends('components.layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Add New Client</h2>
    <form action="{{ route('clients.store') }}" method="POST" class="bg-light p-4 rounded">
        @csrf
        <div class="mb-3">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="mb-3">
            <input type="text" name="firm" class="form-control" placeholder="Firm">
        </div>
        <div class="mb-3">
            <input type="text" name="address" class="form-control" placeholder="Address">
        </div>
        <div class="mb-3">
            <input type="number" name="balance" class="form-control" placeholder="Balance" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Client</button>
    </form>
</div>
@endsection
