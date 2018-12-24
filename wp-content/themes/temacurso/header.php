<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Tema</title>
    <!-- Sem essa função nada carrega -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
        <div class="social-media-icons">ICONES</div>
        <div class="search">PESQUISA</div>
        </section>
        <section class="menu-area">
            <section class="logo">LOGO</section>
            <nav class="menu">MENU</nav>
        </section>
    </header>