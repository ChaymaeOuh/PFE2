<style>
    .products {
        transition: all .2s ease-in-out;
        border-radius: 3px;
        height: auto;
        width: 20%;
        box-shadow: rgba(0, 0, 0, 0.788);
        margin: 50px;
        /* border:black solid 5px; */
        z-index: 10;
        cursor: pointer;
    } 
    .products::after {
        content: "";
        clear: both;
        display: table;
    }

    .card {
        position: relative;
    }



    .image img {
        width: 100%;
        height: 50%;
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
        background: rgba(255, 255, 255, .15);
        position: absolute;
        left: -2px;
        top: 10px;
    }

    .cardbar ul li:first-child:after {
        display: none;
    }

    .cardbar ul li a {
        padding: 0 18px;
        color: #ccc;
    }

    .product-card:hover .cardbar {
        opacity: 1;
        top: 0;
    }

    .product {
        position: absolute;
        right: -40px;
        top: 10px;
        z-index: 4;
        transition: 0.6s;
        opacity: 0;
    }

    .p {
        border: 1px solid rgb(233, 233, 233);
        border-radius: 2px;
        height: 40px;
        width: 40px;
        cursor: pointer;
    }

    .p img {
        width: 100%;
        height: 100%;
        opacity: 0.8;
    }

    .p img:hover {
        opacity: 1;
    }

    .product-card:hover .product {
        opacity: 1;
        right: 10px;
    }

    .description {
        padding: 16px 0;
        text-align: center;
    }

    .description a {
        font-size: 18px;
        color: #555;
        font-weight: 700;
        text-transform: capitalize;
        line-height: 24px;
        transition: all .3s ease;
        margin: 18px 0 10px;
        cursor: pointer;
        color: rgb(0, 0, 0);
    }

    .description a:hover {
        color: rgb(0, 0, 205);
        text-decoration: none;
    }

    .description p {
        margin-bottom: 0;
        color: #777;
        line-height: 21px;
        font-size: 14px;
        transition: all .3s ease;
        font-weight: 500;
    }

    .description .prix {
        font-size: 20px;
        color: #8f068f;
        font-weight: 700;
        font-style: italic;
        margin-right: 6px;
    }

    .date {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        background: #8f068f;
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
            <div class="card">
                <div class="date">
                    <h3>8</h3>
                    <h4>Jun</h4>
                </div>
               <div class="product">
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1.jpg') }}" alt="imageproduct"></div>
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1-1.jpg') }}" alt="imageproduct"></div>
                    <div class="p" (mouseover)="changeImage($event)">
                        <img src="{{ asset('assets/images/image1-2.jpg') }}" alt="imageproduct"></div>
                </div> --}}
                <div class="image">
                    <img src="{{ asset('assets/images/'.$prod->image) }}" alt="Image">
                </div>
                <div class="line"></div>
                <div class="cardbar">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa-regular fa-heart fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="description">
                <a href="#">{{ $prod->nom_prod}}</a>
                <p>{{ $prod->description_prod}}</p>
                <p><span class="prix">{{$prod->prix_prod}} MAD</span></p>
            </div>
        </div>
     @endforeach

</div>
