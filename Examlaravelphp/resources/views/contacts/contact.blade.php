@extends('commun')


@section('content')
<p>{{$user->name}}</p>
<a class="btn btn-primary" style="margin-left: 500px" href="{{ route('contact.create')}}">Ajouter</a>
<table class="table">
    <thead>

      <tr>
        <th scope="col">#</th>
        <th scope="col">photo</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Téléphone</th>
        <th scope="col">email</th>
      </tr>

    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
           <td scope="col">#</td>
           <td scope="col"><img class="img-thumbnail" src="{{$contact->getAvatarUrl()}}" alt=""></td>
           <td scope="col">{{ $contact->nom }}</td>
           <td scope="col">{{ $contact->prenom }}</td>
           <td scope="col">{{ $contact->telephone}}</td>
           <td scope="col">{{ $contact->email}}</td>
           <td>
            <a class="btn btn-primary"  href="{{ route('contact.edit',['id' => $contact->id])}}">MAJ</a>
            <a class="btn btn-danger" href="{{route('contact.delete',['id' => $contact->id])}}">Supp</a>
        </td>
         </tr>
       @endforeach
    </tbody>
  </table>
@endsection

