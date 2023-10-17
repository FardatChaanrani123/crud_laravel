<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>

<body>
    <h1>LISTE DES LIVRE</h1>
    @if($verif = Session::get('succes'))
    <h4 class="alert alert-success">{{$verif}}</h4>
    @endif
    <div class="row">
        @foreach($listLivre as $l)
        <div class="card mx-4" style="width: 18rem;">
            <div class="img-thumbnail">
                <div class="card-body">
                    <div class="bloc col-md-4">
                        <h5 class="card-title">
                            <a class="text-decoration-none fs-4" href="{{route('livre.show',$l->id)}}">{{$l->titre}}</a>
                        </h5>
                        <div>
                            <p class="card-text">{{$l->auteur}}</p>
                            <p class="card-text">{{$l->year}}</p>
                            <p class="card-text">{{$l->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>