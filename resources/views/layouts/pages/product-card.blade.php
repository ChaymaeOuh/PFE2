<style>
    .products {
        transition: all .2s ease-in-out;
        height: fit-content;
        width: 90%;
        margin-left: 5%;
        margin-top: 50px;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns:auto auto auto auto;
    }
    .products::after {
        content: "";
        clear: both;
    }

    .product-card{
        margin: 5%;
        border-radius: 3px;
        box-shadow: rgba(0, 0, 0, 0.788);
        height: 65vh;
    }

    .product-card:hover .cardbar {
        opacity: 1;
        top: 0;
    }

    .card {
        position: relative;
        width: 100%;
        height: 60%;
    }



    .image img {
        width: 100%;
        height: 84%;
    }

    .line {
        height: 2px;
        background: #f1f1f1;

    }

    .cardbar {
        text-align: center;
        line-height: 45px;
        background: #111;
        transition: all 1s ease-in-out;
        opacity: 0;
        position: relative;
        top: -30px;
    }

    .cardbar ul {
        padding: 0;
        margin: 0;
        margin-top: -10px;
    }

    .cardbar ul li {
        display: inline-block;
        list-style-type: none;
        position: relative;
    }

    .cardbar ul li::after {
        content: '';
        width: 1px;
        height: 18px;
        background: var(--color3);
        position: absolute;
        left: -2px;
        top: 5px;
    }

    .cardbar ul li:first-child:after {
        display: none;
    }

    .cardbar ul li a {
        padding: 0 18px;
        color: #ccc;
    }

    .p {
        border: 1px solid rgb(233, 233, 233);
        border-radius: 2px;
        height: 30px;
        width: 90%;
        cursor: pointer;
    }


    .product-card:hover {
        opacity: 1;
        right: 10px;
    }

    .description {
        text-align: center;
        width: 100%;
        height: 40%;
    }

    .description a {
        font-size: 16px;
        width: 90%;
        color: var(--color7);
        font-weight: 700;
        text-transform: capitalize;
        line-height: 24px;
        transition: all .3s ease;
        cursor: pointer;
        color: rgb(0, 0, 0);
        height: 20%;
        padding-top: 10px;
    }

    .description a:hover {
        color: var(--color1);
        text-decoration: none;
    }

    .description p {
        margin-bottom: 0;
        color: var(--color4);
        line-height: 21px;
        font-size: 14px;
        transition: all .3s ease;
        font-weight: 500;
        height: 60%;
    }

    .description .prix {
        bottom: 0;
        font-size: 20px;
        color: var(--color7);
        font-weight: 700;
        font-style: italic;
        margin-right: 6px;
        height: 20%;
        display: block;
    }

    .date {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        background: var(--color1);
        padding: 8px 4px;
        text-align: center;
        border-radius: 0 0 4px 4px;

    }

    .date h3 {
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        display: block;
        margin: 0;
        padding: 0;

    }

    .date h4 {
        color: #fff;
        margin: 0;
        padding: 0;
        font-size: 14px;

    }
</style>





<div class="products">
     @foreach ($featured_products as $prod)
        <div class="product-card">

            <a href=" {{url('Category/'.$prod->nom_prod)}}">
            <div class="card">
                <div class="date">
                    <h3>{{ date('d', strtotime($prod->date))}}</h3>
                    <h4>{{ date('m', strtotime($prod->date))}}</h4>
                </div>
               {{-- <div class="product">
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1.jpg') }}" alt="imageproduct"></div>
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1-1.jpg') }}" alt="imageproduct"></div>
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1-2.jpg') }}" alt="imageproduct"></div>
                </div>  --}}
                <div class="image">
                    <img src="{{ asset('./imgs/'.$prod->image) }}" alt="Image">
                </div>
                <div class="line"></div>
                <div class="cardbar">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
                        <li><a href="{{ url('/wishlist') }}"><i class="fa-regular fa-heart fa-lg"></i></a></li>
                        <li><a href=" {{url('Category/'.$prod->nom_prod)}}"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="description">
                <a href=" {{url('Category/'.$prod->nom_prod)}}">{{ $prod->nom_prod}}</a>
                <p>{{ $prod->description_prod}}</p>
                <p><span class="prix">{{$prod->prix_prod}} MAD</span></p>
            </div>
        </div>
     @endforeach

</div>
