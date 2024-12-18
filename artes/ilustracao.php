<?php include('../templates/HEAD-artes.php'); ?>

<body class="artes">
    <?php include('../templates/PRELOADER-artes.php'); ?>
    
    <header class="artes">
    <?php include('../templates/TICKER.php'); ?>

    <?php include('../templates/Menu Nav Global/ASIDE-artes.php'); ?>

    <?php include('../templates/NAVBAR-multimedia.php'); ?>

    </header>

    <section class="submenu">

    <nav id="sub-nav" class="subnavbar">
    <ul>
        <li>
            <a href="design.php">Design</a>
        </li>
        <li class="selected"><a>Ilustração</a></li>
        <li>
            <a href="video.php">Vídeo</a>
        </li>
    </ul>
</nav>

        <nav class="menu_quadrados">
            <ol class="article_selector">
                <li class="square" data-index="0"><a onClick="showSlide(0)" title="Altötting"></a></li>
                <li class="square" data-index="1"><a onClick="showSlide(1)" title="Triz"></a></li>
            </ol>
        </nav>
    </section>

    <main class="artes">
        <div class="slider-container">
            <section class="slider" id="design_slider" itemscope itemtype="http://schema.org/ItemList">
                <article class="slide" id="article_1" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
                    <figure>
                        <img src="../images/altotting.jpg" itemprop="image">
                    </figure>
                    <p>Ilustração da curta <a href="https://www.youtube.com/watch?v=H0sk23Xtats">Altötting</a> de Andreas Hykade (2020)</p>
                    <p>Trabalho exposto no Centro Cultural Emergente na Exposição Coletiva <a href="https://amarantemagazine.sapo.pt/sociedade/emergente-centro-cultural-mostra-de-tela-a-tela-cineviagens/?fbclid=IwAR3PN_TZOwTcQQ6ilHyPXOXR8hTVo8v3ojNEcLknHRNaoq3NjH66hyhR0mo">De tela a tela, Cineviagens</a>.</p>
                    <p><em>Data:</em> <span itemprop="dateCreated">2022</span></p>
                </article>
                <article class="slide" id="article_2" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
                    <figure>
                        <img src="../images/TRIZ.jpg" itemprop="image">
                    </figure>
                    <p>Ilustração para música não lançada "Triz" de Mário Grave.</p>
                    <p><em>Data:</em> <span itemprop="dateCreated">2019</span></p>
                </article>
            </section>
            <?php include('../templates/BOTOES.php'); ?>
        </div>
    </main>


    <?php include('../templates/FOOTER-artes.php'); ?>