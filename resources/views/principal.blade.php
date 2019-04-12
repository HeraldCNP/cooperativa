<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Cooperativa de ahorro y credito</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<header>
    <nav>
        <ul>
            <li>Inicio</li>
            <li>Algo1</li>
            <li>Algo2</li>
        </ul>
    </nav>
</header>

<main>
    <article>
        <table border="2" width="100%">
            <thead>
                <tr>
                    <th colspan="2">Encabezado</th>
                </tr>
                <tr>
                    <td>encabezado</td>
                    <td>Enlaces</td>
                </tr>
            </thead>
            <tbody>

                                    @yield('contenido')

            </tbody>
        </table>
    </article>
</main>
</body>
</html>


{{--yield(): Crea nuevamente el contenido--}}
{{--section(): Tiene la posibilidad de incorporar--}}