@extends('layouts.guest')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
                            @csrf
                            @if(isset($product))
                                @method('PUT')
                            @endif

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name ?? '' }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description">{{ $product->description ?? '' }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price ?? '' }}" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update Product' : 'Create Product' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

