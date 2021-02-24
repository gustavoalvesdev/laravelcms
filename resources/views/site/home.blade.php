@extends('site.layout')

@section('title', 'Gustavo Alves || Desenvolvedor Web')

@section('content')
    <section class="main-bg">
        <div class="overlay"></div>
        <div class="container">
            <h2 class="wow bounceInLeft">Especialista em gerar resultados<br /> para o seu negócio!</h2>
            <p class="wow bounceInLeft">
                Soluções em desenvolvimento de aplicativos, sites e sistemas. Seu negócio estará em um outro patamar e
                receberá destaque perante a concorrência. Atendimento qualificado e diferenciado, focado nas suas
                necessidades.
            </p>
            <a href="contato.html" class="btn-contato wow bounceInLeft">
                Entre em Contato
            </a>
            <!-- btn-contato -->
        </div>
        <!-- container -->
    </section>
    <!-- main-bg -->
    <section class="diferenciais">
        <div class="container">
            <div class="line-text">
                <div style="width:75px;"></div>
                <h2>Serviços</h2>
            </div>
            <!-- line-text -->
            <div class="icones-diferenciais">
                <div class="box-icone-single wow bounceInDown">
                    <h2 class="wow rubberBand"><i class="fas fa-laptop-code"></i></h2>
                    <h3>Websites</h3>
                    <p>
                        Websites, landing pages, lojas virtuais, portais, páginas de captura e intranets.
                </div>
                <!-- box-icone-single -->
                <div class="box-icone-single wow bounceInDown">
                    <h2 class="wow rubberBand"><i class="fas fa-address-card"></i></h2>
                    <h3>Sistemas</h3>
                    <p>
                        Sistemas comerciais para cadastro de clientes, controle de estoque, gestão de funcionários, ERPs,
                        integração com NF-e (Nota Fiscal Eletrônica).
                </div>
                <!-- box-icone-single -->
                <div class="box-icone-single wow bounceInDown">
                    <h2 class="wow rubberBand"><i class="fas fa-mobile-alt"></i></i>
                    </h2>
                    <h3>Aplicativos</h3>
                    <p>
                        Aplicativos de delivery, compras, guias comerciais, catálogos de venda, galeria de fotos, etc
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <!-- icones-diferenciais -->
        </div>
        <!-- container -->
    </section>
    <!-- diferenciais -->
    <section class="sobre-equipe">
        <div class="container">
            <div class="equipe-container">
                <div class="line-text">
                    <div style="width:45px;"></div>
                    <h2>Equipe</h2>
                </div>
                <!-- line-text -->
                <div class="avatar-box">
                    <div class="img-avatar" style='background-image:url("{{ asset('assets/images/perfil.jpg') }}");'>
                    </div>
                    <div class="descricao-avatar">
                        <h3>Gustavo Alves</h3>
                        <p>Desenvolvedor Web Full-Stack</p>
                    </div>
                    <!-- descricao-avatar -->
                </div>
                <!-- avatar-box -->
            </div>
            <!-- equipe-container -->
            <div class="sobre-container">
                <div class="line-text">
                    <div style="width:35px;"></div>
                    <h2>Sobre</h2>
                </div>
                <!-- line-text -->

                <p>
                    Sou especialista no desenvolvimento de Websites responsivos (se adaptam a qualquer dispositivo), com
                    painel administrativo para que você ou sua equipe possa atualizar seu site de qualquer lugar e em
                    qualquer dispositivo, sem a necessidade de uma equipe técnica para isso.
                </p>
            </div>
            <!-- sobre-container -->
        </div>
        <!-- container -->
    </section>
    <!-- sobre-equipe -->

    <section class="cards">
        <div class="container">
            <div class="line-text">
                <div style="width:35px;"></div>
                <h2>Portfólio</h2>
            </div>
            <!-- line-text -->
            <div class="cards-container">
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/portfolio/rm-veiculos.PNG') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>Sistema para Loja de Veículos</h4>
                        <p>Anuncie e gerencie os automóveis de sua agência online, compartilhe nas redes sociais, e obtenha
                            uma lista de pessoas interessadas nos veículos para entrar em contato.</p>
                    </div>
                    <!-- card-box-text- -->
                    <a class="link-post" href="#"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/blog/vendas.png') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>As 5 melhores plataformas de venda online</h4>
                        <p>Confira as 5 melhores plataformas para você começar a vender mais hoje mesmo.</p>
                    </div>
                    <!-- card-box-text -->
                    <a class="link-post" href="#"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/blog/brindes.jpg') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>Fidelize seus clientes através de brindes</h4>
                        <p>Brindes são uma forma excelente para a fidelização de seus clientes e parceiros de negócio neste
                            natal legal deste ano.</p>
                    </div>
                    <!-- card-box-text -->
                    <a class="link-post" href="#"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
            </div>
            <!-- cards-container -->
        </div>
        <!-- container -->
    </section>
    <!-- cards -->

    <section class="cards">
        <div class="container">
            <div class="line-text">
                <div style="width:35px;"></div>
                <h2>Posts Recentes</h2>
            </div>
            <!-- line-text -->
            <div class="cards-container">
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/blog/seo.jpg') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>Como otimizar seus resultados de busca com SEO</h4>
                        <p>Aprenda neste post como uma boa estratégia de seu pode ser crucial para o seu negócio.</p>
                    </div>
                    <!-- card-box-text- -->
                    <a class="link-post" href="#"><i class="fas fa-book-reader"></i> Ler Post</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/blog/vendas.png') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>As 5 melhores plataformas de venda online</h4>
                        <p>Confira as 5 melhores plataformas para você começar a vender mais hoje mesmo.</p>
                    </div>
                    <!-- card-box-text -->
                    <a class="link-post" href="#"><i class="fas fa-book-reader"></i> Ler Post</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="card-box-single wow bounceInUp">
                    <div class="card-box-img">
                        <img src="{{ asset('assets/images/blog/brindes.jpg') }}" />
                    </div>
                    <!-- card-box-img -->
                    <div class="card-box-text">
                        <h4>Fidelize seus clientes através de brindes</h4>
                        <p>Brindes são uma forma excelente para a fidelização de seus clientes e parceiros de negócio neste
                            natal legal deste ano.</p>
                    </div>
                    <!-- card-box-text -->
                    <a class="link-post" href="#"><i class="fas fa-book-reader"></i> Ler Post</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
            </div>
            <!-- cards-container -->
        </div>
        <!-- container -->
    </section>
    <!-- cards -->
@endsection
