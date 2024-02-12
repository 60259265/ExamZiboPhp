@extends('commun')

@section('content')
<form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">photo</label>
        <input type="file" name="photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nom</label>
      <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prénom</label>
      <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Téléphone</label>
        <input type="text" name="telephone" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
@endsection
