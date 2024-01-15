<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>База пользователей</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>База пользователей</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Изменить строку</th>
                <th>Удалить строку</th>
                <th>Товары пользователя</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="edit-btn"><a href="{{ route('users.edit', $user->id) }}">Изменить</a></td>
                    <td class="delete-btn"> 
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                    <td class="products-btn">
                        <a href="{{ route('user.products.index', $user->id) }}">Товары</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('users.create') }}" class="add-btn">Добавить пользователя</a>
</body>
</html>
