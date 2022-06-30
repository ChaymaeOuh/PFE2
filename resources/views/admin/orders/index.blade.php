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
                    <h4 class="text-white">Nouvelles Commandes</h4>
                   
                </div>
            </div>
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Numéro de suivi</th>
                        <th>Prix Total</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commande as $item)
                    <tr>
                        <td>{{ date('d-m-Y', strtotime($item->date_commande)) }}</td>
                        <td>{{ $item->num_suivi}}</td>
                        <td>{{ $item->total}}</td>
                        <td>{{ $item->etat == '0'?'En Attendant' : 'Complété'}}</td>
                        <td>
                            <a href="{{ url('admin/view-order/'.$item->id_commande) }}" class="btn btn-primary">Voir</a>
                        </td>

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