@extends('layouts.admin')

@section('content')

<div class="content ">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">shop</i>
            </div>
            <p class="card-category">Dernières Commandes</p>
            <h3 class="card-title">
            </h3>
          </div>
          
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">date_range</i>Dernières 24 heures
              <a href="javascript:;"></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-6"> 
        <a href="{{ url('produits') }}">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">store</i>
            </div>
            <p class="card-category">Nos Produits</p>
            <h3 class="card-title"></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">update</i> Juste mis à jour
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <a href="{{ url('/users')}}">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <p class="card-category"> Nos Clients</p>
            <h3 class="card-title"></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Dernières 24 heures
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
  </div>




  @endsection

  @section('scripts')

  @endsection