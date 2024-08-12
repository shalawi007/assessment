<!DOCTYPE html>
<html>
<head>
    <title>Add/Edit Product</title>
</head>
<body>
    <h1>{{ isset($product) ? 'Edit' : 'Add' }} Product</h1>
    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ isset($product) ? $product->name : '' }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description">{{ isset($product) ? $product->description : '' }}</textarea>
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="{{ isset($product) ? $product->price : '' }}" required>
        </div>
        <button type="submit">{{ isset($product) ? 'Update' : 'Create' }} Product</button>
    </form>
</body>
</html>
