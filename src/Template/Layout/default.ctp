<!DOCTYPE html>

<html>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H3J3E42BFE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H3J3E42BFE');
    </script>

    <!-- Google Adsense  -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8422004861189868" crossorigin="anonymous"></script>

    <meta name="google-adsense-account" content="ca-pub-8422004861189868">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="google-site-verification" content="Eci_rnEG7e0oM7aKEHRCrZY3jBPUr7hPifeddhvvAbU" />

    <?php
    $controller = $this->request->getParam('controller');
    $action = $this->request->getParam('action');

    if ($controller === 'Artigos' && $action === 'noticia') {
        echo $this->element('meta');
    } else if ($controller === 'Artigos' && $action === 'curiosidades') {
        echo $this->element('artilheiro-champions');
    } else {
        echo $this->element('metadefault');
    }
    ?>

    <!-- Estilo CSS -->
    <?= $this->Html->css('plugins.css') ?>
    <?= $this->Html->css('search.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('cookies.css') ?>

    <!-- jQuery -->
    <?= $this->Html->script('admin/jquery.js'); ?>

    <!-- Vendors -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.png" sizes="32x32">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <div id="preloader"></div>

    <div class="main-wrapper">
        <header class="header-style2">
            <div class="top-bar bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="top-bar-info">
                                <ul class="ps-0">
                                    <li style="display: none!important;">Ollé Sports, o palco virtual dos esportes</li>
                                    <li class="d-none d-sm-inline-block"><i class="ti-email"></i>contato@ollesports.com.br</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 d-none d-md-block">
                            <ul class="top-social-icon ps-0">
                                <li><a href="https://www.facebook.com/ollesportsbrasil"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/OlleSports"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path fill="#ffffff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg></a></li>
                                <li><a href="https://www.instagram.com/ollesports.brasil/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-default border-bottom border-color-light-white">

                <div class="top-search bg-secondary">
                    <div class="container">

                        <?= $this->Form->create(null, ['url' => ['controller' => 'Artigos', 'action' => 'lista'], 'class' => 'search-form', 'type' => 'get']) ?>
                        <div class="input-group">
                            <span class="input-group-addon cursor-pointer">
                                <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                            </span>
                            <input type="text" class="search-form_input form-control" id="busca" name="busca" autocomplete="off" value="<?= $this->request->getQuery('busca') ?>" placeholder="Busque aqui...">
                            <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                        </div>
                        <?php echo $this->Form->end(); ?>

                    </div>
                </div>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="navbar-header navbar-header-custom">
                                        <a href="/" class="navbar-brand logodefault">
                                            <?= $this->Html->image('logo/logo.png', ['alt' => 'Ollé Sports', 'title' => 'Ollé Sports']); ?>
                                        </a>
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li>
                                            <a href="/">HOME</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'Curiosidades']) ?>">Curiosidades</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'MaisVisto']) ?>">O MAIS VISTO</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'NoticiasRecentes']) ?>">RECENTES</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'Brasileirao']) ?>">BRASILEIRÃO</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'CopaBrasil']) ?>">COPA DO BRASIL</a>
                                        </li>
                                        <!-- <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'Libertadores']) ?>">LIBERTADORES</a>
                                        </li> -->
                                    </ul>

                                    <div class="attr-nav">
                                        <ul>
                                            <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <?= $this->Flash->render() ?>
        <div>
            <?= $this->fetch('content') ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row mt-n2-6">
                <div class="col-md-6 col-lg-3 mt-2-6 wow fadeIn" data-wow-delay="200ms">
                    <div class="mb-1-6 mb-lg-1-9">
                        <?= $this->Html->image('logo/footer-light-logo.png', ['style' => 'width: 10rem;', 'alt' => 'Ollé Sports', 'title' => 'Ollé Sports']); ?>
                    </div>
                    <h5 class="text-white">Ollé Sports</h5>
                    <p class="text-white mb-1-6 mb-lg-1-9">O palco virtual onde o mundo dos esportes ganha vida,
                        inspiração e informação a cada jogada, corrida e conquista.</p>

                </div>
                <div class="col-md-6 col-lg-3 mt-2-6 wow fadeIn" data-wow-delay="400ms">
                    <div class="ps-md-1-9 ps-xl-2-5">
                        <ul class="footer-list-style3">
                            <li><a href="/">Home</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'MaisVisto']) ?>">O Mais Visto</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'NoticiasRecentes']) ?>">Noticias Recentes</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'Brasileirao']) ?>">Brasileirão</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-2-6 wow fadeIn" data-wow-delay="600ms">
                    <div class="ps-lg-1-9 ps-xl-2-5">
                        <ul class="footer-list-style3">
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'CopaBrasil']) ?>">Copa do Brasil</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'Libertadores']) ?>">Libertadores</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Artigos', 'action' => 'SulAmericana']) ?>">Sul-Americana</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-2-6 wow fadeIn" data-wow-delay="600ms">
                    <div class="ps-lg-1-9 ps-xl-2-5">
                        <ul class="footer-list-style3">
                            <li><a href="/contatos">Contatos</a></li>
                            <li><a href="/sobre">Sobre nós</a></li>
                            <li><a href="/politicas">Política de privacidade</a></li>
                            <li><a href="/termos">Termos de uso</a></li>
                            <li><a href="/transparencia">Transparência</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar borders-top border-color-light-white wow fadeIn" data-wow-delay="200ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mt-3 mt-md-0 order-2 order-md-1">
                        <p class="d-inline-block text-white mb-0">&copy; <span class="current-year"></span>
                            Direritos Reservados
                            <a href="#!" class="text-primary white-hover">Ollé Sports</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                        <p class="text-white d-inline-block mb-0 align-middle">Siga-nós :</p>
                        <ul class="footer-social-style1">
                            <li>
                                <a href="https://www.facebook.com/ollesportsbrasil"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://twitter.com/OlleSports"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ollesports.brasil/"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="wrapper">
        <header>
            <i class="cookies bx bx-cookie"></i>
            <h2><a href="/politicas">Política de Cookies</a></h2>
        </header>

        <div class="data">
            <p>Este site utiliza cookies para realização de análises estatísticas acerca de sua utilização. Não são coletados dados pessoais por meio de cookies.</p>
        </div>

        <div class="buttons">
            <button class="button" id="acceptBtn">Aceitar</button>
            <button class="button" id="declineBtn">Recusar</button>
        </div>
    </div>


    <!-- Scripts -->
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('core.min.js') ?>
    <?= $this->Html->script('search.js') ?>
    <?= $this->Html->script('main.js') ?>
    <?= $this->Html->script('pluginsqu.js') ?>
    <?= $this->Html->script('scriptsqu.js') ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>



    <script>
        const cookieBox = document.querySelector(".wrapper"),
            buttons = document.querySelectorAll(".button");

        const executeCodes = () => {
            if (document.cookie.includes("cookieAceito")) return;
            cookieBox.classList.add("show");

            buttons.forEach((button) => {
                button.addEventListener("click", () => {
                    cookieBox.classList.remove("show");

                    if (button.id == "acceptBtn") {
                        document.cookie = "cookieBy= cookieAceito; max-age=" + 60 * 60 * 24 * 30;
                    }
                });
            });
        };
        window.addEventListener("load", executeCodes);
    </script>

    <script>
        $(document).ready(function() {
            $('#busca').on('input', function() {
                if ($('#busca').val() != '') {
                    $('#busca-resultados').removeClass('hidden');
                } else {
                    $('#busca-resultados').addClass('hidden');
                }
            });
        });
    </script>

</body>

</html>