<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="form col-md-4 m-auto" action="{{route('livre.update',$limodif->id)}}" method="POST">
            <h1 class="text-center">Formulaire de Modification</h1>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="control-label">
                    titre
                </label>
                <input type="text" value="{{$limodif->titre}}" name="titre" placeholder="Entrer le titre" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Auteur
                </label>
                <input type="text" name="auteur" value="{{$limodif->auteur}}" placeholder="Entrer l'auteur" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Annee de publication
                </label>
                <input type="text" name="year" value="{{$limodif->year}}" placeholder="Entrer la quantite" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Description
                </label>
                <textarea name="description" class="form-control">{{$limodif->description}}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="envoyer" class="btn btn-success">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</body>

</html>