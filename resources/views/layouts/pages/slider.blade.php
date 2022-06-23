<style>
.slider{
    position: relative;
    width: 100%;
}
.myslider{
    height: auto;
    display: none;
    overflow: hidden;
}
.prev, .next{
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    font-size: 50px;
    padding: 15px;
    cursor: pointer;
    color: var(--color2);
    transition: 0.1s;
    user-select: none;
}
.prev:hover, .next:hover{
    color: var(--color4);
}
.next{
    right: 0;
}
.dotsbox{
    position: absolute;
    left:50%;
    transform: translate(-50%);
    bottom: 20px;
    cursor: pointer;
}
.dot{
    display: inline-block;
    width: 15px;
    height: 15px;
    border: 3px solid var(--color3);
    border-radius: 50%;
    margin: 0 10px;
    cursor: pointer;
}
.slider .active, .dot:hover{
    background-color: var(--color2);
    border-color:var(--color6);
}
.fade{
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}
@-webkit-keyframes fade{
    from{opacity: 0.8;}
    to {opacity: 1;}
}
@keyframes fade{
    from{opacity: 0.8;}
    to {opacity: 1;}
}
img{
    width: 100%;
}
@media screen and (max-width: 800px){
    .myslider{
        height: 500px;
    }

}


</style>

<div class="slider">
    <div class="myslider fade" style="display: block;">
        <img src="{{asset('assets/images/slide-1.jpg')}}" style="width:100%;">
    </div>
    <div class="myslider fade">
        <img src="{{asset('assets/images/slide-2.jpg')}}" style="width:100%;">
    </div>
    <div class="myslider fade">
        <img src="{{asset('assets/images/slide-3.jpg')}}" style="width:100%;">
    </div>
    <div class="myslider fade">
        <img src="{{asset('assets/images/slide-4.jpg')}}" style="width:100%;">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</div>
