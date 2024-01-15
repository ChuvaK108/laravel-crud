<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить пользователя</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.create.css') }}">
</head>
<body>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <h2>Добавить пользователя</h2>
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Адрес почты:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Добавить пользователя</button>
            @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </form>


</body>
</html>
