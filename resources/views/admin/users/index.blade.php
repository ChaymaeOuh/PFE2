@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Clients Enregistrés</h4>
          <hr>

      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nom Complet</th>
                      
                      <th>E-mail</th>
                      <th>Téléphone</th>
                      <th>Action</th>
                     
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $item)
                  <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nomCli.' '.$item->prenomCli }}</td>
                      
                      <td>{{ $item->email }}</td>
                    
                      <td>{{ $item->telCli }}</td>
                      
                      <td>
                          <a href="{{ url('view-user/'.$item->id) }}" class="btn btn-primary btn-sm">Voir</a>
                          <a href="{{ url('supprimer-client/'.$item->id) }}" class="btn btn-danger btn-sm">Supprimer</a>

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