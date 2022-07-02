<style>
    .container{
        width: 1000px;
    }
.cart-page{
        margin: 80px auto;
    }
    table{
        width: 100%;
        border-collapse:collapse;
    }
    .cart-info{
        display: flex;
        flex-wrap: wrap;
    }
    th{
        text-align: left;
        padding: 5px;
        color: #fff;
        background: var(--color1);
        font-weight: normal;
    }
    td{
        padding: 10px 5px;
    }
    td input{
        width: 50px;
        height: 30px;
        padding: 5px;
    }
    td a{
        color:var(--color7);
        font-size: 12px;
    }
    td img{
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }
    .total-price{
        display: flex;
        justify-content: flex-end;
    }
    .total-price table{
        border-top: 3px solid var(--color2) ;
        width: 100%;
        max-width: 370px;
    }
    td:last-child{
        text-align: right;
    }
    th:last-child{
        text-align: right;
    }
    @media only screen and (max-width: 600px){
        .cart-info p{
            display: none;
        }
    }
    .fa .fa-trash-o{
        color:red;
    }
    .vide i{
        color: blue;
    }
   .check{
    background-color:white ;
    border: 1px solid  #006400;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    cursor: pointer;
   }
.check:hover {
  background-color:  #006400; 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.vide h2{
    text-align: center;
    font-weight: 200;
    font-size: 38px; 
}
.vide button{
    background-color:white ;
    border: 1px solid  blue;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    cursor: pointer;
    float: right;
    
   }
.vide button:hover {
  background-color:  blue; 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
   
    
    
</style>



<div class="container cart-page">
    <table>
    @if($cartitems->count() > 0)
        <tr>
            <th>Produit</th>
            <th></th>
            <th>Prix</th>
            <th>Quantite</th>
            <th></th>
        </tr>
      
        @php $totals = 0; @endphp
        @foreach($cartitems as $item)
        <tr class="product_data">
            
            <td>
                <div class="cart-info">
                    <img src="{{ asset('./imgs/'.$item->products->image) }}" height="70px" width="70px"> 
                    <div>
                        <p>{{ $item->products->nom_prod }}</p>                          
                    </div>               
                </div>
            </td>
            
            <td><input type="hidden" class="prod_id" value="{{$item->prod_id}}" ></td>
            <td>{{ $item->products->prix_prod}}</td>
            <td><input type="number" value=" {{$item->prod_qty}} " class=" qty-input"> </td>
            <td><i class="fa fa-trash-o delete-cart-item " style='font-size:24px'></i></td>
           
        </tr>
        @php $totals += $item->products->prix_prod * $item->prod_qty ; @endphp
        @endforeach
     </table>
     <table class="">
        <tr>
        <td><h4>Ptix Total: {{ $totals }} MAD</h4></td>
        <td><a href=" {{ url('checkout') }} "><button class="check" >Procédé A La Caisse</button></a></td>
        </tr>
        @else
        <div class="vide">
            <h2>Votre <i class="fa fa-shopping-cart"></i> panier est vide</h2>
            <button>Continer Vos Achats </button>
        </div>
       @endif
        
</table>

  
</div>