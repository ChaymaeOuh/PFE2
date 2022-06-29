<style>

</style>


<form>
    <div class=" user">
        <h2 class="titles">Basic Details</h2>
        {{ csrf_field()}}
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nom</span>
                <input type="text" name="name" value="{{ Auth::user()->name}}" placeholder="Enrtez votre nom" required>
            </div>
            <div class="input-box">
                <span class="details">Prénom</span>
                <input type="text" name="prenom" value="{{ Auth::user()->prenom}}" placeholder="Entrez votre prenom" required>
            </div>
            <div class="input-box">
                <span class="details">E-mail</span>
                <input type="text" name="email" value="{{ Auth::user()->email}}" placeholder="Entrez votre adresse e-mail" required>
            </div>
            <div class="input-box">
                <span class="details">Téléphone</span>
                <input type="text" name="tel" value="{{ Auth::user()->telCli}}" placeholder="Entrez votre numero de telephone" required>
            </div>
            <div class="input-box">
                <span class="details">Adresse De Livraison</span>
                <input type="text" name="adresse" value="{{ Auth::user()->adresseCli}}" placeholder="Enrtez votre adresse" required>
            </div>
        </div>

    </div>
    <div class="order">
        <table>
            <h4>Details De Commande</h4>
            <thead>

                <tr>
                    <th>Nom </th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders->orderitems as $item)
                <tr>
                    <td>{{$item->products->nom_prod}}</td>
                    <td>{{$item->quantite}}</td>
                    <td>{{$item->prix}}</td>
                    <td>
                       <img src="{{ asset('assets/images/'.$item->produits->image) }}" alt="image de produit" width="50px"> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</form>