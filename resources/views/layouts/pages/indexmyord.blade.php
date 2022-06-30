<style>
    td {
        padding: 10px 5px;
    }

    th {
        text-align: left;
        padding: 5px;
        color: #fff;
        background: var(--color1);
        font-weight: normal;
    }

    table {
        width: 80%;
        margin-top: 10px;
    }

    .voir{
    background-color:white ;
    border: 1px solid var(--color1) ;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    cursor: pointer;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    width: 6em;
    
   }
.voir:hover {
  background-color: var(--color1); 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
h4{
  
  font-weight: 800;
  position: relative;
  margin-left: 30px;
  margin-top: 20px;

}
h4::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
</style>

<div>
    <div>
        <table>
            <thead>
                <h4 class="title" style="font-size: 100%;">Mes Commandes</h4>
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
                    <td>{{ $item->num_suivi }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->etat == '0' ? 'En Attendant' : 'Complete' }}</td>
                    <td>
                        <a href="{{ url('view-order/'.$item->id_commande) }}"><button class="voir">Voir</button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>