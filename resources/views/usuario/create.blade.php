<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario para crear usuarios</h1>
    <form method="POST" action="/usuarios">
        @csrf
        @method('POST')
        <label>nombre</label>
        <input name="nombre" type="text"><br>
        <label>correo</label>
        <input name="correo" type="text"><br>
        <label>ci</label>
        <input name="ci" type="text"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>