<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0"> 
<link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
<title>Document</title>
</head>
<body> 
    <h2 class="text-center">AFFICHAGE D'UN SEUL LIVRE</h2> 
    <div class="container shadow shadow-lg col-md-4">
        <h5 class=""> {{$livre->titre}} </h5>
        <p class="card-text">{{$livre->auteur}}</p> 
        <p class="card-text">{{$livre->year}}</p>
        <p class="card-text">{{$livre->description}}</p>
        <div class="mb-3 col-md-4">
            <a href="{{route('livre.edit',$livre->id)}}" class="btn btn-info">Modifier</a>
            <form action="{{route('livre.destroy',$livre->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger m-auto">Supprimer</button>
            </form>
            
        </div>
    </div>
</body>
</html>