<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <div class="user-menu"><a href="/"><img class="usuario-pic" src="{{asset('img/icons/nav/usuarioazul.svg')}}"><img class="menu-logo" src="{{asset('img/icons/nav/logomethink.svg')}}"></a></div>
        <a href="/list" class="list"><li><img src="{{asset('img/icons/nav/agenda.svg')}}"></li></a>   
        <a href="/proyect" class="proyect"><li><img src="{{asset('img/icons/nav/equipos.svg')}}"></li></a>
        <a href="/message" class="message"><li><img src="{{asset('img/icons/nav/bandejaentrada3.svg')}}"></li></a>
        <a href="javascript:messageView();"><li><img src="{{asset('img/icons/nav/buscar.svg')}}"></li></a>  
    @endguest
</ul>