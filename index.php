<?php 
$msg = 0;
@$msg = $_REQUEST['msg'];
?>
<!DOCTYPE HTML>

<html lang="pt-BR">

<head>
    <title>Spawn | Corp</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.css">
    <meta name="google-site-verification" content="DunG_Hcd_2ViVPenErrnalGmkEBpLKQrlvkSsqKVo6w" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" type="icon-bar" href="images/icon.png">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="landing is-preload">
    <div id="page-wrapper">
        <header id="header" class="alt">
            <h1 class="logo"><a style="text-decoration: none; color: white;" href="index.html">Spawn|Corp</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a style="text-decoration: none;" href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.php">Inicío</a></li>
                                <li><a href="portfolio.html">Portfólio</a></li>
                                <li><a href="planos.html">Planos</a></li>
                                <li><a href="equipe.html">Equipe</a></li>
                                <li><a href="contato.php">Contato</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <section id="banner">
            <div class="inner">
                <h2 class="logo">Spawn | Corp</h2>
                <p>Desenvolvimento de Sites e Aplicativos</p>
                <ul class="actions special">
                    <li>
                        <input type="button" value="Contate-nos" onClick="Nova()">
                    </li>
                </ul>
            </div>
            <a href="#one" class="more scrolly" style="text-decoration: none;">Saiba Mais</a>
        </section>
        <section id="one" class="wrapper style1 special">
            <div class="inner">
                <header class="major">
                    <h2>Quem Somos</h2>
                    <p>Somos programadores a sua disposição, nossas especializações são sites em geral, podemos construir um site tanto para divulgar sua loja, seu estabelecimento quanto para construir suas ideias, agendamento de restaurante, pedidos de
                        lanches e pizzas. Você imagina e a gente programa para vocês. Sua imaginação e o nosso limite. </p><strong>Logo traremos mais informações e novidades</strong>
                </header>
                <ul class="icons major">
                    <li><span class="icon solid fa-code major style3"><span class="label"></span></span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper alt style2">
            <section class="spotlight">
                <div class="image"><img src="images/sites.jpg" alt="" /></div>
                <div class="content">
                    <h2>Sites</h2>
                    <p>Sites construidos com a cara de sua empresa, eficiente, dinâmicos, fácil manusear e extretamente eficaz, para divulgar sua empresa e seus negócios. Desenvolvidos com HTML5, CSS3, Bootstrap 4, jQuery, PHP, Banco de Dados, e outras
                        linguagem programação. Formas originais e praticas de programação para website.
                    </p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/phone.jpg" alt="" /></div>
                <div class="content">
                    <h2>Aplicativos</h2>
                    <p>Desenvolvimento de aplicativos para Android e IOS, pode ser tanto um aplicativo de divulgação e feedback de sua empresa, ou até um cardápio de sua lanchonete ou pizzaria, pode um ser também um aplicativo para fazer uma reserve no seu
                        restaurante, o que você precisar e imaginar. </p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/conf.png" alt="" /></div>
                <div class="content">
                    <h2>Mantenção</h2>
                    <p>Fazemos também manuteção em seus sites e aplicativos mensamente, para que você sempre possa estar atulizando e inovando em seus produtos.</p>
                </div>
            </section>
        </section>
        <!-- <section id="three" class="wrapper style3 special">
            <div class="inner">
                <header class="major">
                    <h2>Serviços</h2>
                    <p>Voçe imagina e a gente programa para voçe</p>
                </header>
                <ul class="features">
                    <li class="icon fa-paper-plane">
                        <h3>Enviar</h3>
                        <p>texto</p>
                    </li>
                    <li class="icon solid fa-laptop">
                        <h3>Titúlo</h3>
                        <p>texto</p>
                    </li>
                    <li class="icon solid fa-code">
                        <h3>Titúlo</h3>
                        <p>texto</p>
                    </li>
                    <li class="icon solid fa-headphones-alt">
                        <h3>Titúlo</h3>
                        <p>texto</p>
                    </li>
                    <li class="icon fa-heart">
                        <h3>Titúlo</h3>
                        <p>texto</p>
                    </li>
                    <li class="icon fa-flag">
                        <h3>Titúlo</h3>
                        <p>texto</p>
                    </li>
                </ul>
            </div>
        </section> -->

        <section id="cta" class="wrapper style4">
            <div class="inner" style="text-align: center">
                <header class="#contato">
                    <h2 class="logo">Contato</h2>
                    <?php if($msg == 'enviado'): ?>
                    <h3>Sua mensagem foi enviada!</h3>
                    <img src="images/checked1.png" alt="Imagem" class="img-fluid col-lg-2">
                    <?php else: ?>
                    <form action="processa.php" method="POST">
                        <label class="field a-field a-field_a2 page__field">
                            <input type="text" class="field__input a-field__input" placeholder="Juninho Corrêa" required name="nome">
                            <span class="a-field__label-wrap">
                                <span class="a-field__label">Nome</span>
                            </span>
                        </label>
                        <br>
                        <label class="field a-field a-field_a2 page__field">
                            <input type="email" class="field__input a-field__input" placeholder="contato@spawncorp.com" required name="email">
                            <span class="a-field__label-wrap">
                                <span class="a-field__label">E-mail</span>
                            </span>
                        </label>
                        <br>
                        <label class="field a-field a-field_a2 page__field">
                            <textarea type="text" class="field__input a-field__input" placeholder="Digite aqui..." rows="10" cols="21" required name="mensagem"></textarea>
                            <span class="a-field__label-wrap">
                                <span class="a-field__label">Mensagem</span>
                            </span>
                        </label>
                        <br>
                        <input type="submit" value="Enviar">
                    </form>
                    <?php endif; ?>

                </header>
                <!-- <ul class="actions stacked"><br><br><br><br>
                    <li><a style="text-decoration: none;" href="contato.php" class="button fit primary">Contate-nos</a></li>
                    <li><a style="text-decoration: none; color: white;" href="portfolio.html" class="button fit">Saiba mais</a></li>
                </ul>

            </div> -->
        </section>

        <footer id="footer">
            <i class="icon solid fa-envelope"></i> contato@spawncorp.com</span>
            <ul class="icons"><br>
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; COPYRIGHT</li>
                <li><a style="text-decoration: none;" href="index.html">Spawn|Corp</a></li>
            </ul>
        </footer>

        </div>


        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/browser.min2.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/nova.js"></script>

</body>

</html>