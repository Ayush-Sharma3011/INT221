<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cloth["name"] }} - Clothes Shop</title>
</head>
<body>
    <h1>{{ $cloth["name"] }}</h1>
    
    <p><strong>Price:</strong> ₹{{ $cloth["price"] }}</p>
    <p><strong>Description:</strong> {{ $cloth["description"] }}</p>
    
    <a href="{{ url('/clothes') }}">Back to Shop</a>
</body>
</html>