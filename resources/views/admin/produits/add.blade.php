@extends('layouts.admin')

@section('content')
  <div class='card'>
      <div class='card-header'>
          <h4>Ajouter Un Produit</h4>
      </div>
      <div class='card-body'>
          <form action="{{url('insert-produit')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-12">
                  <select class="form-select" name="cate_id" >
                      <option value="">choisissez une catégorie</option>
                      @foreach($categories as $item)
                        <option value="{{ $item->id_cat}}">{{$item->nomCat}}</option>

                      @endforeach


                  </select>
                  </div>
                  <div class="col-md-6 mt-3">
                      <label for="">Nom</label>
                      <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Description</label>
                      <textarea name="description" rows="3" class="form-control"></textarea>

                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="">Plus d'informations</label>
                    <textarea name="descriptions" rows="3" class="form-control"></textarea>

                </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Prix</label>
                      <input type="number" step="0.01" class="form-control" name="price">
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Quantité</label>
                      <input type="number"  class="form-control" name="quantite">
                  </div>
                  <div class="col-md-12 mt-3 ">
                      <input type="file" name="image" class="form-control" >
                  </div>
                  <div class="col-md-12 mt-3">
                      <button type="submit" class="btn btn-primary">Soumettre</button>
                  </div>

              </div>

          </form>

      </div>

  </div>


@endsection


@section('scripts')

@endsection

