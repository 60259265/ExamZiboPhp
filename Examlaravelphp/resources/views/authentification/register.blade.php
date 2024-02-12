@extends('commun')

@section('content')
<form action="{{route('authentification.register')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nom et Prénom</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">email</label>
      <input name="email" type="email" class="form-control" id="exampleInputPassword1">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
        <input  name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Confirmer mot de passe</label>
        <input name="password_confirmation" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
  </form>
@endsection
