@extends('welcome')

@section('content')
<div class="container">
  <h1>Personnage</h1>

  <table class="table ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Pseudo</th>
        <th scope="col">Race</th>
        <th scope="col">Pts de vie</th>
        <th scope="col">Armure</th>
        <th scope="col">Detail</th>
        <th scope="col">Proprietaire</th>
        <th scope="col">Edit</th>
        <th scope="col">Del</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($perso as $personnage) : ?>
        <tr>
          <td> <?= $personnage->id ?></td>
          <td> <?= $personnage->pseudo ?></td>
          <td><?= $personnage->nom_race ?></td>
          <td><?= $personnage->nom_specification ?></td>
          <td><?= $personnage->nom_armure ?></td>
          <td><?= $personnage->nom_classe ?></td>
          <td><?= $personnage->name ?></td>
          <td><button class="btn btn-outline-info my-2 my-sm-0">Modifier</button></td>
          <form method="POST" action="{{ route('delete',$personnage->id) }}" > 
            @csrf
            @method('delete')
          <td><button class="btn btn-outline-danger my-2 my-sm-0">Supprimer</button></td>
          </form>
        <?php endforeach; ?>
        </tr>
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    <a href="/create" class="btn btn-outline-success my-2 my-sm-0">Creer</a> 
  </div>
</div>

@endsection