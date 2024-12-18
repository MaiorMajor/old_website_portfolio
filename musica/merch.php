<?php include('../templates/HEAD-musica.php'); ?>

<body class="musica">

  <?php include('../templates/PRELOADER-musica.php'); ?>

    <header class="musica">
        <section class="news-ticker">
            <span>Apoia artistas vocais <strong><a href="https://www.paypal.com/donate/?hosted_button_id=NBQLB3ED8JMU4" target="_blank">DOAR</a></strong></span>
        </section>

    <?php include('../templates/Menu Nav Global/ASIDE-musica.php'); ?>

        <nav id="main-nav" class="navbar">
            <div class="nav-logo-container">
                <a href="musica.php"><img src="../images/LOGO_MAIOR.png" alt="Logo" class="logo" /></a>
            </div>
            <ul class="menu">
                <li class="selected">
                    <a><strong>CATÁLOGO</strong></a>
                </li>

                <li class="list"><a href="about.php"><strong>SOBRE MIM</strong></a></li>
            </ul>
        </nav>
    </header>
    <section class="submenu">
        <nav id="sub-nav" class="subnavbar">
            <ul>
                <li>
                    <a href="musica.php">Música</a>
                </li>
                <li class="selected"><a>Merch</a></li>
            </ul>
        </nav>
    </section>

    <main itemscope itemtype="http://schema.org/Product" class="musica">
        <h1><a href="comprar.php">Comprar Merch</a></h1>
        <section itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <article itemscope itemtype="http://schema.org/Product">
                <figure><a href="comprar.php" class="hover-container-2">
                        <img src="../images/MERCH/Qubus (EU).jpg" alt="fita" itemprop="image">
                        <h3 itemprop="name">Fita de colar MAIOR MAJOR<br>[COMPRAR]</h3>
                    </a>
                </figure>
            </article>
            <article itemscope itemtype="http://schema.org/Product">
                <figure><a href="comprar.php" class="hover-container-2">
                        <img src="../images/MERCH/rm363-b08-google-mockup.png" alt="fita" itemprop="image">
                        <h3 itemprop="name">T-shirt MAIOR MAJOR<br>[COMPRAR]</h3>
                    </a>
                </figure>
            </article>
            <article itemscope itemtype="http://schema.org/Product">
                <figure><a href="comprar.php" class="hover-container-2">
                        <img src="../images/MERCH/OQ3A7S1.jpg" alt="fita" itemprop="image">
                        <h3 itemprop="name">Caneca MAIOR MAJOR<br>[COMPRAR]</h3>
                    </a>
                </figure>
            </article>
        </section>
    </main>

    <?php include('../templates/FOOTER-musica.php'); ?>
