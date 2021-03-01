<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gustavo Alves da Silva" />
    <meta name="description" content="@yield('description')" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" />
    <link rel="stylesheet" href="{{asset('assets/fonts/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="Logotipo da BeeMind" /></a>
            </div>
            <!-- logo -->
            <nav class="menu-desktop">
                <ul>

                    @foreach($frontMenu as $menuSlug => $menuTitle)
                    <li><a href="{{$menuSlug}}">{{$menuTitle}}</a></li>
                    @endforeach

                    <!-- <li class="selected"><a href="index.html">Home</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="contato.html">Contato</a></li> -->
                </ul>
            </nav>
            <!-- menu-deskop -->
            <nav class="menu-mobile">
                <h2><i class="fa fa-bars"></i></h2>
                <ul>
                    @foreach($frontMenu as $menuSlug => $menuTitle)
                    <li><a href="{{$menuSlug}}">{{$menuTitle}}</a></li>
                    @endforeach
                </ul>
            </nav>
            <!-- menu-mobile -->
            <div class="clear"></div>
        </div>
        <!-- container -->
    </header>

    @yield('content')

    <!-- container -->
    <footer class="footer">
        <section class="footer-links">
            <div class="container">
                <div class="endereco">
                    <h5>Aonde Estamos</h5>
                    <p>Rua dos Goivos, 19 - CEP: 08544-100</p>
                    <p>(11) 99653-1308</p>
                </div>
                <!-- endereco -->
                <div class="links">
                    <h5>Links Úteis</h5>
                    <p><a href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a></p>
                    <p><a href="#"><i class="fas fa-envelope"></i> {{$frontConfig['email']}}</a></p>
                </div>
                <!-- links -->
                <div class="redes">
                    <h5>Conecte-se Conosco</h5>
                    <p><a href="#"><i class="fab fa-facebook-square"></i></a><a href="#"><i
                                class="fab fa-instagram"></i></a></p>
                </div>
                <!-- redes -->
            </div>
            <!-- container -->
        </section>
        <!-- footer-links -->
        <section class="footer-direitos">
            <div class="container">
                <p>Todos os direitos reservados</p>
            </div>
            <!-- container -->
        </section>
        <!-- footer-direitos -->
    </footer>
    <!-- footer -->
    <script src="{{asset('assets/fonts/js/all.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('assets/js/menu.js')}}"></script>

    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script>
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 100
        });

        wow.init();
    </script>


</body>

</html>
