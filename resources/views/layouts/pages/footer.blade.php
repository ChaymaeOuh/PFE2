<style>
    .footer {
    bottom: 0%;
    display: flex;
    background-color: var(--color6);
}

.footerComponents{
    width: 100%;
}

.colomn {
    float: left;
    padding: 15px;
    justify-content: start;
    align-items: flex-start;
    color: var(--color3);
}

.colomn.footerLinks{
    width: calc(100%/3);
}

.colomn.contact {
    padding: 0px 0px 10px 0px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.title{
    font-size: 10px;
    letter-spacing: 5px;
}

#border{
    border-bottom: 3px solid var(--color3);
    width: 65%;
}

.titleCont{
    font-size: 11px;
    letter-spacing: 10px;
}

.linkset{
    display: flex;
    justify-content: start;
    align-items: flex-start;
    flex-direction: column;
    list-style-type: none;
}

.clinks{
    display: flex;
    margin-top: 10px;
}

.socials{
    color: var(--color2);
    margin: 0rem 0.5rem;
    background-color: transparent;
    height: 50px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 50%;
    background-color: var(--color3);
    transition: all 0.2s ease-in-out;
}

.socials:hover{
    height: 60px;
    width: 60px;
}

.listElement a {
    display: block;
    cursor: pointer;
    text-align: center;
    height: 100%;
    padding: 1rem 0rem;
    font-size: 15px;
    text-decoration: none;
    color: var(--color5);
    transition: all .2s ease-in-out;
}

.listElement a:hover{
    transform: translateX(15%);
}

@media(max-width:800px){
    .colomn.footerLinks{
    width: calc(50%);
}
}
@media(max-width:484px){
    .colomn.footerLinks{
    width: calc(100%);
}
}


</style>



<div class="footer">
    <div class="footerComponents">
        <div class="colomn footerLinks">
            <div class="title">
                <div id="border">
                    <h1>//SERVICE CLIENT</h1>
                </div>
            </div>
            <ul class="linkset">
                <li class="listElement"><a href="#">Aide & FAQ</a></li>
                <li class="listElement"><a href="#">Modalites de Livraison</a></li>
                <li class="listElement"><a href="#">Politique de retour</a></li>
                <li class="listElement"><a href="#">Signaler un Produit</a></li>
                <li class="listElement"><a href="#">Utiliser un coupon de reduction</a></li>
            </ul>
        </div>
        <div class="colomn footerLinks">
            <div class="title">
                <div id="border">
                    <h1>//A PROPOS</h1>
                </div>
            </div>
            <ul class="linkset">
                <li class="listElement"><a href="#">Qui sommes-nous</a></li>
                <li class="listElement"><a href="#">Conditions d'utilisation</a></li>
                <li class="listElement"><a href="#">Modes de Paiement</a></li>
            </ul>
        </div>
        <div class="colomn footerLinks">
            <div class="title">
                <div id="border">
                    <h1>//GANGNER L'ARGENT</h1>
                </div>
            </div>
            <ul class="linkset">
                <li class="listElement"><a href="#">Vendez sur IO STORE</a></li>
                <li class="listElement"><a href="#">Devenir Livreur</a></li>
                <li class="listElement"><a href="#">Devenir Partenaire</a></li>
            </ul>
        </div>
        <div class="colomn contact">
            <div class="titleCont">
                <h1>//CONTACTEZ-NOUS</h1>
            </div>
            <div class="clinks">
                <a class="socials" href="#">
                    <i class="fa-solid fa-envelope fa-lg"></i>
                </a>
                <a class="socials" href="#">
                    <i class="fa-brands fa-facebook fa-lg"></i>
                </a>
                <a class="socials" href="#">
                    <i class="fa-brands fa-twitter fa-lg"></i>
                </a>
                <a class="socials" href="#">
                    <i class="fa-brands fa-linkedin-in fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
