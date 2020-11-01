<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste de Layout</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <link href="https://file.myfontastic.com/YXBrKmSudPcr7hoDzQvxHU/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/scripts.js"></script>
</head>
<body>
<div class="mobile-nav" id="close">
    <div class="mobile-nav-content">
        <a href="#">pagina inicial</a>
        <a href="#">ultimas noticias</a>
        <a href="#">esportes</a>
        <a href="#">tecnologia</a>

    </div>

</div>
<header class="header">
    <div class="header-content">

        <p>Blog Pro</p>
        <p class="btn-openMenuMobile" data-icon="b"></p>
        <nav class="header-nav">
            <a href="#">pagina inicial</a>
            <a href="#">ultimas noticias</a>
            <a href="#">esportes</a>
            <a href="#">tecnologia</a>

            <form method="post" class="search">
                <label class="flield">
                    <input name="search" type="text">
                    <button type="submit" data-icon="a" name="sendSearch"></button>

                </label>

            </form>

        </nav>

    </div>

</header>

<main class="main">
    <div class="main-content">

        <section class="blog">
            <?php
            for ($i = 0; $i <= 7; $i++):
            ?>
                <article class="noticeBox">
                    <div class="noticeTitle">
                        <h3>Titulo da noticia</h3>

                    </div>
                    <div class="noticeBody">
                        <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryan...</p>
                    </div>
                    <footer class="noticeFooter">
                        <a href="#">Saiba mais</a>

                    </footer>

                </article>

            <?php
                endfor;
            ?>

        </section>

    </div>

</main>
</body>
</html>
