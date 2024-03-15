<!DOCTYPE html>
<html>
<head>
    <title>Shopify App</title>
</head>
<body>
    <h1>Shopify Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>