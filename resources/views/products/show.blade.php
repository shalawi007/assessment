<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<body>
    <h1>Product Details</h1>
    <div>
        <strong>Name:</strong> {{ $product->name }}
    </div>
    <div>
        <strong>Description:</strong> {{ $product->description }}
    </div>
    <div>
        <strong>Price:</strong> {{ $product->price }}
    </div>
    <a href="{{ route('products.index') }}">Back to List</a>
</body>
</html>
