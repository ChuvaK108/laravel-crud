
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары пользователя {{ $user->name }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>
<body>
    <h1>Товары пользователя {{ $user->name }}</h1>
<br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название товара</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


