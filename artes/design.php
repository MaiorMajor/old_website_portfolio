<?php include('./templates/HEAD-artes.php'); ?>

<body class="artes">
    <?php include('./templates/PRELOADER-artes.php'); ?>

    <header class="artes">
        <?php include('./templates/TICKER.php'); ?>

        <?php include('./templates/Menu Nav Global/ASIDE-artes.php'); ?>

        <?php include('./templates/NAVBAR-multimedia.php'); ?>

    </header>

    <section class="submenu">

        <nav id="sub-nav" class="subnavbar">
            <ul>
                <li class="selected">
                    <a>Design</a>
                </li>
                <li><a href="ilustracao.php">Ilustração</a></li>
                <li>
                    <a href="video.php">Vídeo</a>
                </li>
            </ul>
        </nav>

        <nav class="menu_quadrados">
            <ol class="article_selector">
                <li class="square" data-index="0"><a onClick="showSlide(0)" title="Lagarelha"></a></li>
                <li class="square" data-index="1"><a onClick="showSlide(1)" title="Notável"></a></li>
                <li class="square" data-index="2"><a onClick="showSlide(2)" title="L-Ali"></a></li>
            </ol>
        </nav>

    </section>

    <main class="artes">
        <div class="slider-container">
            <section class="slider" id="design_slider" itemscope itemtype="http://schema.org/ItemList">
                <article class="slide" id="article_1" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
                    <figure>
                        <img src="../images/Design/ncfill.png" id="logo_lagarelha" itemprop="image">
                    </figure>
                    <figure>
                        <img src="../images/Design/ncoutline.png" alt="logo nc" id="logo_lagarelha" itemprop="image">
                    </figure>
                    <p>Logótipo desenvolvido para a empresa de revenda de malhas Notável e Completo.</p>
                    <p><em>Data:</em> <span itemprop="dateCreated">2022</span></p>
                </article>
                <article class="slide" id="article_2" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
                    <figure>
                        <img src="../images/Design/LAGARELHA.png" id="logo_lagarelha" itemprop="image">
                    </figure>
                    <figure>
                        <img src="../images/Design/274862212_103282468973989_4361948264065240304_n.jpg" alt="quadro abstrato" itemprop="image">
                    </figure>
                    <p>Logótipo desenvolvido para a empresa de produção de vinho Lagarelha.</p>
                    <p><em>Data:</em> <span itemprop="dateCreated">2020</span></p>
                </article>
                <article class="slide" id="article_3" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
                    <figure>
                        <img src="../images/lali.jpg" itemprop="image">
                    </figure>
                    <p>Capa desenvolvida para o EP do rapper <a href="https://www.instagram.com/l_ali__/" target="_blank">L-Ali</a> "Raramente Satisfeito".</p>
                    <p><em>Data:</em> <span itemprop="dateCreated">2021</span></p>
                </article>
            </section>

            <?php include('./templates/BOTOES.php'); ?>

        </div>
    </main>

    <?php include('./templates/FOOTER-artes.php'); ?>
