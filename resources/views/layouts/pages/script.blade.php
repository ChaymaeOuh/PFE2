<style>
    .usertab {
        display: none;
        position: absolute;
        position: fixed;
        width: 200px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 200;
        float: right;
        top: 66px;
        left: 80%;
        border-radius: 20px;
        background-color: var(--color5);
        transform-origin: top right;
    }

    .usertab button {
        color: var(--color2);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        border-bottom: 1px;
        border-color: var(--color2);
        border-radius: 20px;
        width: 90%;
        margin: 5px;
        font-size: 18px;
        text-align: center;
        background-color: var(--color3);
        cursor: pointer;

    }
    .usertab a{
        text-decoration: none;
    }
    .show {
     display: block;
    }
</style>


<span id="usertab" class="usertab">
    <a href="{{ route('login') }}"><button class="loginbtn">Connexion</button></a>
    <a href="{{ route('register') }}"><button class="registerbtn">Inscription</button></a>
</span>

<script>
    const userfunc = () => {
    const button1 = document.querySelector(".userbtn");
    const signup = document.querySelector(".usertab");
    signup.classList.toggle("show");

}


</script>

