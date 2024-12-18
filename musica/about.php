<?php include ('../templates/HEAD-musica.php'); ?>

<body class="musica">

<?php include ('../templates/PRELOADER-musica.php'); ('../templates/Menu Nav Global/ASIDE-musica.php'); ?>

  <header class="musica">
    <section class="news-ticker">
      <span>Paga-me uma jola <strong><a href="https://www.paypal.com/donate/?hosted_button_id=NBQLB3ED8JMU4"
            target="_blank">PAGAR UMA JOLA</a></strong></span>
    </section>

    <?php include('../templates/Menu Nav Global/ASIDE-musica.php'); ?>
    
    <nav id="main-nav" class="navbar">
      <div class="nav-logo-container">
        <a href="home.php"><img src="../images/LOGO_MAIOR.png" alt="Logo" class="logo" /></a>
      </div>

      <ul class="menu">
        <li class="list">
          <a href="musica.php"><strong>CATÁLOGO</strong></a>
        </li>
        <li class="selected"><a href=""><strong>SOBRE MIM</strong></a></li>
      </ul>
    </nav>

  </header>

  <main class="about_container" itemscope itemtype="http://schema.org/Person" class="musica">
    <section class="about-me">
      <h1 class="musica-about">Sobre Mim</h1>
      <br>
      <p>
        <a href="../artes/home.php">Jorge Marques</a>, Licenciado em Artes Plásticas pela Faculdade de Belas Artes da
        Universidade do Porto, reside atualmente em Marco de Canaveses. Partindo de um trabalho maioritariamente visual,
        começou a demonstrar interesse pela poesia, o que o levou a desenvolver uma linguagem musical, complementada com
        a pintura e o video. A sua influência pela cultura Hip-Hop, que foi descobrindo desde os 14 anos, é bastante
        vincada no seu trabalho artistico em todas as suas vertentes.
      </p>

    </section>
    <section class="profile">
      <img src="../images/maior.jpg" alt="Profile Picture"  itemprop="image" />
    </section>
  </main>
  <?php include ('../templates/FOOTER-musica.php'); ?>
