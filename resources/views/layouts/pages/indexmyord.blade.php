<div>
        <div>
            <table>
                <thead>
                    <h4>Mes Commandes</h4>
                    <tr>
                        <th>Numero de suivi</th>
                        <th>Prix Total</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $item)
                    <tr>
                        <td>{{ date('d-m-Y', strtotime($item->date_commande)) }}</td>
                        <td>{{ $item->num_suivi }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->etat == '0' ? 'En Attendant' : 'Complete' }}</td>
                        <td>
                        <a href="{{ url('view-order/'.$item->id_commande) }}"><button>Voir</button></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
