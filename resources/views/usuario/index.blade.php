<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Vista Usuarios
    <button onclick="location.href='/usuarios/create'">Crear</button>
        <table border="1px" color="black">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Ci</th>
                <th>Acciones</th>
            </tr>
            @foreach ($vector_usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->ci }}</td>
                <td>
                    <button>Actualizar</button>
                    <button>Eliminar</button>
                </td>
            </tr>
            @endforeach    
        </table>
    
</body>
</html>