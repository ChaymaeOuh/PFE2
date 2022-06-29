 @extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Tous Les Produits</h4>
          <hr>

      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Catégorie</th>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Prix</th>
                      <th>Quantité</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($produits as $item)
                  <tr>
                      <td>{{ $item->id_prod }}</td>
                      <td>{{ $item->categorie->nomCat ??'None' }}</td>
                      <td>{{ $item->nom_prod}}</td>
                      <td>{{ $item->description_prod }}</td>
                      <td>
                          <img src="{{ asset('./imgs/'.$item->image) }}" class="w-100" alt="Image here" />
                      </td>
                      <td>{{ $item->prix_prod }}</td>
                      <td>{{ $item->quantite_prod }}</td>
                      <td>
                          <a href="{{ url('edit-produit/'.$item->id_prod) }}" class="btn btn-primary btn-sm">Modifier</a>
                          <a href="{{ url('supprimer-produit/'.$item->id_prod) }}" class="btn btn-danger btn-sm">Supprimer</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>



          </table>

      </div>
  </div>


@endsection

@section('scripts')

@endsection
