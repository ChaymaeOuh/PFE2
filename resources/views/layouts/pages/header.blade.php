<style>
    .header {
        width: 100vw;
        height: 163px;
        position: fixed;
        background-color: var(--color5);
        z-index: 100 ;
        box-shadow: 30px 0  30px rgba(0, 0, 0, 0.685);
    }

    /*top nav bar css*/
    .topnav {
        display: flex;
        padding: 2rem;
        margin: 0rem 2.5rem 0rem 2.5rem;
        justify-content: space-between;
        align-items: center;
    }

    .top {
        justify-content: center;
    }


    /*logo container*/

    .top.container {
        width: 10rem;
        justify-content: center;
    }

    logo {
        position: absolute;
    }

    .cls-1 {
        fill: var(--color1);
    }

    /*right section*/
    .top.right {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 60%;
    }


    /*search bar*/
    .search {
        display: flex;
    }

    .topnav input[type=text] {
        border: none;
        background-color: var(--color3);
        font-size: 15px;
        padding: .6rem 1rem;
        width: 30vw;
        border-radius: 20px 0px 0px 20px;
    }

    .searchbtn {
        margin-left: .3rem;
        padding: .6rem;
        border: none;
        cursor: pointer;
        border-radius: 0px 20px 20px 0px;
        background-color: var(--color3);
    }

    /*right icons*/
    .icons i {
        margin: 0 3px 0 3px;
    }

    .icons button {
        cursor: pointer;
        width: 20%;
        height: 20%;
        margin-bottom: 10px ;
        border: none;
    }

    .icons button:hover {
        color: var(--color1);
        background-color: var(--color5);
    }

    /*bot navbar css*/
    .botbar {
        border-top: solid;
        border-width: 1px;
        display: flex;
        margin: 0rem 2.5rem 0rem 2.5rem;
        justify-content: space-between;
        align-items: center;
    }

    .navlinks {
        display: flex;
        list-style-type: none;
    }

    /*
li{
    float: left;
}
*/
    .linktop,
    .topbtns {
        display: block;
        border: none;
        background-color: var(--color5);
        cursor: pointer;
        text-align: center;
        border-top: solid transparent;
        border-width: 2px;
        height: 100%;
        padding: 1rem .8rem;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        color: var(--color4);
    }

    .linktop:hover,
    .topbtns:hover {
        background-color: var(--color3);
    }

    .header .active {
        border-top: solid var(--color1);
        border-width: 2px;
        color: var(--color1);
        font-weight: 600;
    }

    .vendre {
        display: block;
        text-align: center;
        padding: 1rem 2rem;
        background-color: var(--color3);
        font-size: 18px;
        text-decoration: none;
        color: var(--color1);
    }

    .vendre:hover {
        background-color: var(--color2);
    }

    .sublinks1 {
        position: absolute;
        background-color: var(--color3);
        display: flex;
        width: 100%;
        clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%);
        transition: all 0.2s ease-in-out;
        justify-content: space-around;
    }

    .sublinks1 a {
        width: 25%;
        font-weight: 700;
        text-decoration: none;
        color: var(--color1);
        text-align: center;
        transition: all 0.2s ease-in-out;
        padding: 1rem 0rem 1rem 0rem;
    }

    .sublinks1 a:hover {
        color: var(--color5);
        background-color: var(--color7);
    }

    .a1 {
        transition: all 0.2s ease;
    }

    .a1.down {
        transform: rotate(90deg);
    }

    .sublinks2 {
        position: absolute;
        background-color: var(--color3);
        display: flex;
        width: 100%;
        clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%);
        transition: all 0.2s ease-in-out;
        justify-content: space-around;
    }

    .sublinks2 a {
        width: 25%;
        font-weight: 700;
        text-decoration: none;
        color: var(--color1);
        text-align: center;
        transition: all 0.2s ease-in-out;
        padding: 1rem 0rem 1rem 0rem;
    }

    .sublinks2 a:hover {
        color: var(--color5);
        background-color: var(--color7);
    }

    .a2 {
        transition: all 0.2s ease;
    }


    .sublinks3 {
        position: absolute;
        background-color: var(--color3);
        display: flex;
        width: 100%;
        clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%);
        transition: all 0.2s ease-in-out;
        justify-content: space-around;
    }


    .sublinks3 a {
        width: 33.6%;
        font-weight: 700;
        text-decoration: none;
        color: var(--color1);
        text-align: center;
        transition: all 0.2s ease-in-out;
        padding: 1rem 0rem 1rem 0rem;
    }

    .sublinks3 a:hover {
        color: var(--color5);
        background-color: var(--color7);
    }

    .a3 {
        transition: all 0.2s ease;
    }

    .down {
        transform: rotate(90deg);
        transition: all 0.2s ease-in-out;
    }

    .open {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        transition: all 0.2s ease-in-out;
    }

    .selected {
        background-color: var(--color3);
    }

    .hidder {
        width: 100%;
        height: 25vh;
    }
</style>


<div class="header">
    <div class="topnav">
        <div class="top container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1071.57 178.7" class="logo">
                <g id="Layer_1" data-name="Layer 1">
                    <path class="cls-1" d="M6663.71,7112.64v19.92h23v153.6h22.08V7112.64Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1"
                        d="M6897,7153.4a82.73,82.73,0,0,0-31.5-31.63q-20-11.37-44.5-11.37a87.94,87.94,0,0,0-44.25,11.37,83.28,83.28,0,0,0-31.62,31.75q-11.62,20.38-11.63,45.88t11.63,45.87a83.14,83.14,0,0,0,31.62,31.75A87.85,87.85,0,0,0,6821,7288.4q24.49,0,44.5-11.38a82.63,82.63,0,0,0,31.5-31.62q11.49-20.25,11.5-46T6897,7153.4Zm-130.56,84.83c-.47-.76-.89-1.54-1.31-2.33q-8.37-15.75-8.38-36.5,0-21,8.38-36.63a60.21,60.21,0,0,1,22.87-24.12q14.49-8.51,33-8.5t33,8.5a59.84,59.84,0,0,1,7.12,4.9Zm110.44-2.33a59.82,59.82,0,0,1-23,24.25,67.82,67.82,0,0,1-65.75,0,58.18,58.18,0,0,1-7.35-5l94.74-94.74c.47.79.92,1.59,1.36,2.4q8.35,15.63,8.37,36.63Q6885.25,7220.15,6876.88,7235.9Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1"
                        d="M7111,7213a46.41,46.41,0,0,0-18-14.25,208.85,208.85,0,0,0-27.75-9.37q-14.25-4-22.12-7.13a34.5,34.5,0,0,1-13.25-9.12c-3.6-4-5.38-9.17-5.38-15.5q0-13.24,9-20.63t23.25-7.37q15.24,0,24.5,7.62t10.5,17.63h25q-2-20.25-17.62-32.5T7059,7110.15q-17,0-30.12,6a47.25,47.25,0,0,0-20.38,17,44.78,44.78,0,0,0-7.25,25.25q0,16.24,7.38,25.87a44.27,44.27,0,0,0,17.75,14.13,195.13,195.13,0,0,0,27.62,9,214.29,214.29,0,0,1,22.25,7,35.16,35.16,0,0,1,13.75,9.5q5.49,6.26,5.5,16.25a26.34,26.34,0,0,1-9.37,20.87q-9.37,8.13-25.63,8.13-17,0-25.87-8.38a31.83,31.83,0,0,1-10.13-20.62h-24.25a43.47,43.47,0,0,0,8,25.12,51.29,51.29,0,0,0,21.38,17q13.6,6.13,30.87,6.13,18,0,31.25-7t20-18.25a45.88,45.88,0,0,0,6.75-24Q7118.5,7222.65,7111,7213Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1" d="M7141.25,7112.4v18.5H7189v155.75h22.75V7130.9h47.5v-18.5Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1"
                        d="M7442.25,7153.4a82.87,82.87,0,0,0-31.5-31.63q-20-11.37-44.5-11.37a87.89,87.89,0,0,0-44.25,11.37,83.3,83.3,0,0,0-31.63,31.75q-11.62,20.38-11.62,45.88t11.62,45.87A83.16,83.16,0,0,0,7322,7277a87.8,87.8,0,0,0,44.25,11.38q24.48,0,44.5-11.38a82.77,82.77,0,0,0,31.5-31.62q11.49-20.25,11.5-46T7442.25,7153.4Zm-130.57,84.83c-.47-.76-.9-1.54-1.31-2.33q-8.39-15.75-8.37-36.5,0-21,8.37-36.63a60.23,60.23,0,0,1,22.88-24.12q14.49-8.51,33-8.5t33,8.5a58.8,58.8,0,0,1,7.1,4.9Zm110.44-2.33a59.89,59.89,0,0,1-23,24.25,67.82,67.82,0,0,1-65.75,0,58.18,58.18,0,0,1-7.35-5l94.74-94.74c.46.79.92,1.59,1.36,2.4q8.37,15.63,8.38,36.63Q7430.5,7220.15,7422.12,7235.9Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1"
                        d="M7572,7215.6q20.76-4.5,31.12-18.25a54,54,0,0,0,3.63-58q-6.75-11.51-20.38-18.25c-9.07-4.5-20.59-6.75-33.76-6.75H7523.1v18.75h29.52c12.5,0,22.19,2.83,28.26,8.5s9.13,13.67,9.13,24q0,15.26-9.25,24.37c-6.16,6.09-15.8,9.13-28.14,9.13H7523.1v18.25h23.52l41.89,71.25h27.25Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1" d="M7455.88,7114.35v20h20.06V7288.4h25.25v-174Z"
                        transform="translate(-6663.71 -7110.15)" />
                    <path class="cls-1"
                        d="M7735.29,7133.1v-18.75h-93.75v174.5h93.75V7270.1h-71v-60h63.5v-18.75h-63.5V7133.1Z"
                        transform="translate(-6663.71 -7110.15)" />
                </g>
            </svg>
        </div>
        <div class="top right">
            <form action="#">
                <div class="search">
                    <input type="text" placeholder="Rechercher . . .">
                    <button href="#" class="searchbtn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
            <div class="icons">
                <button><i class="userbtn fa-regular fa-user fa-lg"></i></button>
                <button><i class="fa-regular fa-heart fa-lg"></i></button>
                <a href="{{ url('cart') }}" ><button><i class="fa-solid fa-cart-shopping fa-lg"></i></button></a>
                <button><i class="mode fa-regular fa-moon fa-lg"></i></button>
            </div>
        </div>
    </div>
    <div class="botbar">
        <ul class="navlinks">
            <li><a class="active linktop" href="{{url('/')}}">ACCUEIL</a></li>
            <li><button class="logiciels topbtns">LOGICIELS <i class="a1 fa-solid fa-chevron-right"></i></button>
            </li>
            <li><button class="materiels topbtns">MATERIELS <i class="a2 fa-solid fa-chevron-right"></i></button>
            </li>
            <li><button class="templates topbtns">TEMPLATES <i class="a3 fa-solid fa-chevron-right"></i></button>
            </li>
            <li><a class="linktop" href="#footer">CONTACT</a></li>
        </ul>
        <a class="vendre" href="#">VENDRE</a>
    </div>
    <span class="sublinks1">
        <a href="{{ url('Systeme d’exploitation')}}">Système d’exploitation</a>
        <a href="{{ url('Utilitaires bureautiques')}}">Utilitaires bureautiques </a>
        <a href="#">Applications mobile</a>
        <a href="#">Logiciels à télécharger</a>
        <a href="#">Antivirus et sécurité</a>
    </span>
    <span class="sublinks2">
        <a href="{{ url('PC Portable')}}">PC Portable</a>
        <a href="{{ url('PC Bureau')}}">PC bureau</a>
        <a href="#">Composants</a>
        <a href="#">Stockage</a>
        <a href="#">Périphériques</a>
    </span>
    <span class="sublinks3">
        <a href="#">Sites Web</a>
        <a href="#">CV</a>
        <a href="#">Cartes visites</a>
        <a href="#">Badges</a>
    </span>
<<<<<<< HEAD


=======
     <span id="usertab" class="usertab">
        <a href="{{ route('login') }}"><button class="loginbtn">Connexion</button></a>
        <a href="{{ route('register') }}"><button class="registerbtn">Inscription</button></a>
    </span>
    <span id="usertabhome" class="usertabhome">
        <a ><button class="loginbtnhome">Profil</button></a>
        <a href="{{ url('my-orders') }}"><button class="loginbtnhome">Mes Commandes</button></a>

        
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="logout">Deconnexion</button></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
        </form>
    </span>
>>>>>>> 9a7938dbfbdf1d91039871246c248dc2d6eae6ec
</div>
<div class="hidder"></div>
