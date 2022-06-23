@extends('layouts.admin')

@section('content')
  <div class='card'>
      <div class='card-header'>
          <h4>Ajouter Un Produit</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('Modifier-produit/'.$produits->id_prod) }}" method="POST" enctype="multipart/form-data">
             @method('PUT')    
             @csrf
              <div class="row">
                  <div class="col-md-12">
                  <select class="form-select" >
                      <option value="">{{ $produits->categorie->nomCat ?? 'None' }}</option>    
                  </select>
                  </div>
                  <div class="col-md-6 mt-3">
                      <label for="">Nom</label>
                      <input type="text" class="form-control" value="{{ $produits->nom_prod}}" name="name">
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Description</label>
                      <textarea name="description" rows="3"  class="form-control">{{ $produits->description_prod}}</textarea>

                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Prix</label>
                      <input type="number" class="form-control" value="{{ $produits->prix_prod}}"  name="price">
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Quantité</label>
                      <input type="number" class="form-control" value="{{ $produits->quantite_prod}}"  name="quantite">
                  </div>
                  @if($produits->image)
                      <img src="{{ asset('assets/uploads/produits/'.$produits->image)}}" alt="" >
                  @endif
                  <div class="col-md-12 mt-3 ">
                      <input type="file" name="image"  class="form-control" >
                  </div>
                  <div class="col-md-12 mt-3">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>

              </div>
              
          </form>

      </div>

  </div>


@endsection


@section('scripts')

@endsection

