<?php include('../templates/HEAD-artes.php'); ?>

<body class="artes">
    <?php include('../templates/PRELOADER-artes.php'); ?>

    <header class="artes">
        <?php include('../templates/TICKER.php'); ?>

        <?php include('../templates/Menu Nav Global/ASIDE-artes.php'); ?>
            <nav id="main-nav" class="navbar">
                <div class="nav-logo-container">
                    <a href="home.php"><img src="../images/logojm.png" alt="Logo" class="logo" /></a>
                </div>
                <ul class="menu">
                    <li class="list">
                        <a><strong>BELAS-ARTES</strong></a>
                        <ul class="subcategorias">
                            <li><a href="abstrato.php">Abstrato</a></li>
                            <li><a href="realismo.php">Realismo</a></li>
                        </ul>
                    </li>
                    <li class="list">
                        <a><strong>MULTIMEDIA</strong></a>
                        <ul class="subcategorias">
                            <li><a href="design.php">Design</a></li>
                            <li><a href="ilustracao.php">Ilustração</a></li>
                            <li><a href="video.php">Vídeo</a></li>
                        </ul>
                    </li>
                    <li class="selected"><a href=""><strong>SOBRE MIM</strong></a></li>
                </ul>
            </nav>
    </header>
    <main class="about_container" itemscope itemtype="http://schema.org/Person" class="musica">
        <section class="about-me">
            <h1 class="musica-about">Sobre Mim</h1>
            <br>
            <p itemprop="description">
                Jorge Marques é um artista visual versátil, especializado em pintura, design e multimédia, com forte
                influência do hip-hop. Com uma licenciatura em Belas Artes em Pintura e atualmente a frequentar um
                Mestrado em Multimédia, especialização em Tecnologias Interativas e Jogos Digitais, Jorge tem estado no
                seu próprio caminho artístico
                desde o ensino secundário, exibindo as suas habilidades na indústria das artes e do design.
            </p><br>
            <p itemprop="description">
                Como artista autónomo, Jorge é capaz de combinar as belas-artes, a pintura e a multimédia para criar
                trabalhos altamente criativos. Tem experiência em pintura hiper-realista e abstrata, e tem uma conexão
                especial com o graffiti. Na multimédia, as suas habilidades incluem design de interfaces, logos e web
                design.
            </p>

        </section>
        <section class="profile" itemscope itemtype="http://schema.org/ImageObject">
            <img src="../images/profile_jorge.png" alt="Profile Picture" itemprop="image" />
        </section>
    </main>

    <?php include('../templates/FOOTER-artes.php'); ?>