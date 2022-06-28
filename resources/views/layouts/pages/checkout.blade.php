<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */

form{
    width: 100%;
    display: flex;
}
.contain{
  /* max-width: 700px; */
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
}
.contain .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
  margin-left: 30px;

}
.contain .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.conten form .user-details{
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
  margin-left: 30px;
  width: 50%;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: 100%;
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 70%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}


 @media(max-width: 584px){
 .contain{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%; 
  }
.content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .contain .conten .category{
    flex-direction: column;
  }
}
td{
        padding: 10px 5px;
 }
th{
        text-align: left;
        padding: 5px;
        color: #fff;
        background: var(--color1);
        font-weight: normal;
}
table{
    width: 100%;
    margin-top: 10px;
}
.passer{
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
    float: right;
    
   }
.passer:hover {
  background-color: var(--color1); 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.two{
font-size: 25px;
font-weight: 500;
position: relative;
margin-left:20px;
width: 45%;
padding: 5%;
float: left;  
}
.one{
    width: 45%;
    padding: 5%;
}

</style>

<div class="contain">
<form action="{{ url('place-order') }}" method="POST">
    
    <div class=" one">
    <h4 class="title">Basic Details</h4>
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
            <span class="details">Adresse</span>
            <input type="text" name="adresse" value="{{ Auth::user()->adresseCli}}" placeholder="Enrtez votre adresse" required>
          </div>
        </div>   
      
    </div>
    <div class=" two" >
           <h4 class="title">Details De La Commande</h4> 
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartitems as $item)
                <tr>
                    <td>{{$item->products->nom_prod}}</td>
                    <td>{{$item->prod_qty}}</td>
                    <td>{{$item->products->prix_prod}}</td>
                    
                </tr> 
                @endforeach
                
            </tbody>
        </table>
        
        <button type="submit" class="passer" >Passer la commande</button>
    </div>
    </form>
</div>

