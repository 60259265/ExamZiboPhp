<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container-md col-6 mt-5">
        <form method="POST" enctype="multipart/form-data" action="{{ route('contact.update',['id' => $contact->id])}}" >
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">photo</label>
                <input type="file" name="avatar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" name="nom" value="{{ $contact->nom }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Prénom</label>
              <input type="text" name="prenom" value="{{ $contact->prenom }}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" name="telephone" value="{{$contact->telephone}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="email" name="email" value="{{$contact->telephone}}" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">MAJ</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
