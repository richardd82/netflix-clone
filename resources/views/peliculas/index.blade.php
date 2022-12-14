<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Películas</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Imágen</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
            <tr>
                <th scope="row">{{$pelicula->id}}</th>
                <td>{{$pelicula->nombre}}</td>
                <td>{{$pelicula->imagen}}</td>
                <td>{{$pelicula->descripcion}}</td>
                <td>{{$pelicula->trailer}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>