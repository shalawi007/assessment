@extends('layouts.guest')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <h1 class="display-4">Welcome to the Product Management System</h1>
            <p class="lead">Manage your products efficiently and easily.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">View Products</a>
        </div>
    </div>
@endsection
