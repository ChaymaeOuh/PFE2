<style>
    .product_detail {
        width: 100%;
        height: 100vh;
    }
    .product_card{
        margin-top: 4%;
        margin-left: 10%;
        width: 80%;
        height: 60vh;
        border: 2px solid var(--color3);
        box-shadow:  0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        display: flex;
    }
    img{
        width: 90%;
        height: 90%;
        cursor: pointer;
    }
    .product{
        width: 70%;
        height: 100% ;
    }
    .one{
        width: 100%;
        height: 25%;
        display: flex;
    }
    .one h2{
        font-size: 18px;
        color: var(--color1);
        width: 70%;
        padding:  25px 0 25px 0;
    }
    .prix{
        color: var(--color2);
        padding: 25px 0 25px 0;
        margin-left: 5%;
        width: 25%;
        font-size: 22px;
    }
    hr{
        color: var(--color3);
        width: 99%;
    }
    .description{
        font-size: 100%;
        width: 100%;
        height: 45%;
    }
    .three{
        width: 100%;
        height: 30%;
        margin-top: 2px;
    }
    .stock{
        color: var(--color3);
        background-color: var(--color2);
        width: 20px;
        height: 6px;
        font-size: 16px;
        padding: 3px;
        border-radius: 7%;
        cursor: pointer;

    }
    .last{
        width: 100%;
        display: flex;
    }
    .quantite{
        width: 20%;
        height: 90%;
        margin-top: 8px;
    }
    .quantite label{
        font-size: 18px;
    }
    .qte{
        width: 50%;
        height: 25px;
        border: 1px solid var(--color2);
        border-radius: 10px;
        margin-top: 5px;
        margin-left: 10px;
    }
    .wishlist , .cart{
        width: 20%;
        height: 90%;
        color: var(--color1);
        background-color: var(--color3);
        border: 1px solid var(--color2);
        padding: 10px;
        margin: 15px;
        border-radius: 20px;
        cursor: pointer;
    }
    .wishlist:hover , .cart:hover{
        color: var(--color5);
        background-color: var(--color7);
        border: 1px solid var(--color2);
    }
</style>




<div class="product_detail">
    <div class="product_card">
        <div class="photo">
            <img src="{{asset('./imgs/'.$products->image)}}" alt="image">
        </div>
        <div class="product">
            <div class="one">
                <h2>{{ $products->nom_prod }}</h2>
                <label class="prix"> {{ $products->prix_prod }} MAD</label>
            </div>
            <hr>
            <p class="description">
                {!! $products->descriptions_prod !!}
            </p>
            <hr>
            <div class="three">
                @if ($products->quantite_prod > 0)
                    <label class="stock"> En stock</label>
                @else
                    <label class="stock"> En rupture de stock</label>
                @endif
                <div class="last">
                    <div class="quantite">
                        <label>Quantité</label>
                        <input type="number" name="qte" value="1" class="qte" />
                    </div>
                    <button type="button" class="wishlist">Ajouter aux Favouris</button>
                    <button type="button" class="cart">Ajouter au Panier</button>
                </div>
            </div>
        </div>
    </div>
</div>
