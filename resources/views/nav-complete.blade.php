<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <div class="user-menu"><a href="/"><img class="usuario-pic wow fadeInLeft" src="{{asset('img/icons/nav/usuarioazul.svg')}}"><img class="menu-logo  wow fadeInDown" src="{{asset('img/icons/nav/logomethink.svg')}}"></a></div>
        <a href="/list" class="list"><li><img class="wow fadeInDown" data-wow-delay="0.0s" src="{{asset('img/icons/nav/agenda.svg')}}"></li></a>   
        <a href="/proyect" class="proyect"><li><img class="wow fadeInDown" data-wow-delay="0.1s" src="{{asset('img/icons/nav/equipos.svg')}}"></li></a>
        <a href="/message" class="message"><li><img class="wow fadeInDown" data-wow-delay="0.2s" src="{{asset('img/icons/nav/bandejaentrada3.svg')}}"></li></a>
        <a href="javascript:messageView();"><li><img class="wow fadeInDown" data-wow-delay="0.3s" src="{{asset('img/icons/nav/buscar.svg')}}"></li></a>  
    @endguest
</ul>