<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Personas</title>
</head>
<body>

        <table border="2">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>CI</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->ci }}</td>
                    <td>{{ $persona->nombres }}</td>
                    <td>{{ $persona->paterno }}</td>
                    <td>{{ $persona->materno }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->email }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>

</body>
</html>