<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Shop</title>
</head>
<body>
    <h1>Clothes available at shop</h1>
    <ul>
        @foreach($clothes as $cloth)
            <li>
                <a href="{{ url('/clothes/' . $cloth['id']) }}">{{ $cloth['name'] }}</a> - ₹{{ $cloth['price'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>