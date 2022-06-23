@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h4>Détails Du Client
                      <a href="{{ url('users') }}" class="btn btn-primary btn-sm float-right">Retour</a>
                  </h4>
                  <hr>

               </div>

               <div class="card-body">
                   <div class="row">
                   <div class="col-md-4 mt-3">
                           <label for="">Role</label>
                           <div class="p-2 border">{{$users->role_as == '0'? 'Client':'Administrateur'}}</div>
                       </div>
                       <div class=" col-md-4 mt-3">
                           <label for="">Nom</label>
                           <div class="p-2 border">{{$users->nomCli}}</div>
                       </div>
                       <div class="col-md-4 mt-3">
                           <label for="">Prénom</label>
                           <div class="p-2 border">{{$users->prenomCli}}</div>
                       </div>
                       <div class="col-md-4 mt-3">
                           <label for="">E-mail</label>
                           <div class="p-2 border">{{$users->email}}</div>
                       </div>
                       <div class="col-md-4 mt-3">
                           <label for="">Téléphone</label>
                           <div class="p-2 border">{{$users->telCli}}</div>
                       </div>
                       <div class="col-md-4 mt-3">
                           <label for="">Adresse</label>
                           <div class="p-2 border">{{$users->adresseCli}}</div>
                       </div>
                   </div>
         
          
               </div>
            </div>

        </div>
    </div>
</div>
  


@endsection

@section('scripts')

@endsection