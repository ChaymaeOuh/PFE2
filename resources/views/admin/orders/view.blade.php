@extends('layouts.admin')

@section('title')
  Commandes

@endsection


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Les Détails De La Commande
                        <a href="{{ url('orders') }}" class="btn btn-primary float-end">Retour</a>
                    </h4>
                   
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order-details">
                        <h4>Les Détails D'Expédition</h4>
                        <hr>   

                        @foreach($commande as $item)
                        <label for ="">Nom</label>
                        <div class="border ">{{ $item->user->nomCli ?? 'None' }}</div>
                        <label for ="">Prénom</label>
                        <div class="border">{{ $item->user->prenomCli ?? 'None' }}</div>
                        <label for ="">E-mail</label>
                        <div class="border ">{{ $item->user->email ?? 'None' }}</div>
                        <label for ="">Téléphone</label>
                        <div class="border">{{ $item->user->telCli ?? 'None' }}</div>
                        <label for ="">Adresse</label>
                        <div class="border ">{{ $item->user->adresseCli ?? 'None' }}</div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <h4>Détails De La Commande</h4>
                        <hr>
                    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom De Produit</th>
                        <th>quantité</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commande->orderitems as $item)
                    <tr>
                        <td>{{ $item->produits->nom_prod}}</td>
                        <td>{{ $item->quantite}}</td>
                        <td>{{ $item->prix}}</td>

                    </tr>
                    @endforeach
                </tbody>
                </table>
                <h4 class="px-2">Total: <span class="float-end">{{ $commande->total_TTC }}</span></h4>

                    </div>
                </div>

                <table class="table table-bordered">
                <thead>
                   
                </thead>
                <tbody>
                    @foreach($commande as $item)
                    <tr>
                    

                    </tr>
                    @endforeach
                </tbody>

               
                </table>
            </div>

        </div>
    </div>
</div>
 


@endsection

@section('scripts')

@endsection