<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>LISTE D'UN SEUL PRODUIT</h1>
        <div class="container shadow shadow-md">
            <p class="text-decoration-none fs-3">{{$data->libelle}}
            </p>
            <p>{{$data->prix}}</p>
            <p>{{$data->quantite}}</p>
            <p>{{$data->description}}</p>
            <div>
                <a href="{{route('produit.edit',$data->id)}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
</body>
</html>