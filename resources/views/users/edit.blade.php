<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование профиля</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.edit.css') }}">
</head>
<body>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Редактирование <br>профиля</h2>
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Адрес почты:</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Обновить строку</button>
    </form>
</body>
</html>

