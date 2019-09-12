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
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" type="icon-bar" href="images/icon.png">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
    <div id="page-wrapper">
        <header id="header">
            <h1 class="logo"><a style="text-decoration: none; color: white;" href="index.php">Spawn|Corp</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.php">Inicío</a></li>
                                <li><a href="portfolio.html">Portfólio</a></li>
                                <li><a href="planos.html">Planos</a></li>
                                <li><a href="contato.php">Contato</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <article id="main">
            <header>
                <h2 class="logo">Contato</h2>
                <div class="page">
                    <div class="page__demo">

                    <?php if($msg == 'enviado'): ?>
                        <h3>Sua mensagem foi enviada!</h3>
                        <img src="images/checked.png" alt="Imagem" class="img-fluid col-lg-2">
                    <?php else: ?>
                        <form action="sendEmail.php" method="POST">
                            <label class="field a-field a-field_a3 page__field">
                                <input type="text" class="field__input a-field__input" placeholder="Renato Russo" required name="nome">
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Nome</span>
                                </span>
                            </label>
                            <br>
                            <label class="field a-field a-field_a3 page__field">
                                <input type="email" class="field__input a-field__input" placeholder="contato@spawncorp.com" required name="email">
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">E-mail</span>
                                </span>
                            </label>
                            <br>
                            <label class="field a-field a-field_a3 page__field">
                                <textarea type="text" class="field__input a-field__input" placeholder="Digite aqui..." rows="10" cols="21" required name="mensagem"></textarea>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Mensagem</span>
                                </span>
                            </label>
                            <br>
                            <input type="submit" value="Enviar">
                        </form>
                    <?php endif; ?>

                    </div>
                </div>
            </header>
        </article>


        <footer id="footer">
        <i class="icon solid fa-envelope"></i> contato@spawncorp.com</span>
        <ul class="icons"><br>
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; COPYRIGHT</li>
            <li><a style="text-decoration: none;" href="index.php">Spawn|Corp</a></li>
        </ul>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>