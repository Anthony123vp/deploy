<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_1">Contraseña</label>
            <input type="password" id="password_1" name="password_1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_2">Confirmar Contraseña</label>
            <input type="password" id="password_2" name="password_2" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_rol">ID de Rol</label>
            <input type="text" id="id_rol" name="id_rol" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</body>
</html>