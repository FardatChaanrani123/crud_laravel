<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.js')}}" defer></script>    
    <title>Document</title>
</head>
<body>
    <main class="home-main">
        <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Faire une tache</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout des livre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="form" action="{{route('livre.store')}}" method="POST">
                    @csrf
				<div class="mb-3">
					<label class="control-label">
						Titre
					</label>
					<input type="text" name="titre" placeholder="Entrer le titre" class="form-control input-lg">
				</div>
				<div class="mb-3">
					<label class="control-label">
						Auteur
					</label>
					<input type="text" name="auteur" placeholder="Entrer l'auteur" class="form-control input-lg">
				</div>
                <div class="mb-3">
					<label class="control-label">
						Annee de publication
					</label>
					<input type="text" name="year" placeholder="Entrer la date" class="form-control input-lg">
				</div>
                <div class="mb-3">
                    <label class="control-label">
						Description
					</label>
                    <textarea name="description" class="form-control input-lg"></textarea>
                </div>
				<div class="mb-3">
					<button type="submit" name="envoyer" class="btn btn-success">
						Envoyer
					</button>
				</div>
			</form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>