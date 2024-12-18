<?php include('../templates/HEAD-musica.php'); ?>

<body class="musica">

  <?php include('../templates/PRELOADER-musica.php'); ?>

  <header class="musica">
    <section class="news-ticker">
      <span>Ajuda um g <strong><a href="https://www.paypal.com/donate/?hosted_button_id=NBQLB3ED8JMU4" target="_blank">DOAR</a></strong></span>
    </section>

    <?php include('../templates/Menu Nav Global/ASIDE-musica.php'); ?>

    <?php include('../templates/NAVBAR-musica.php'); ?>
  </header>

  <section class="submenu">
    <nav id="sub-nav" class="subnavbar">
      <ul>
        <li class="selected">
          <a href="musica.php">Música</a>
        </li>
        <li><a href="merch.php">Merch</a></li>
      </ul>
    </nav>
    <section class="subsubsub">
      <a href="singles.php">Singles</a>
      <a href="colabs.php">Colabs</a>
    </section>
  </section>

  <main class="musiquinha musica" itemscope itemtype="http://schema.org/MusicGroup">
    <div class="single-container">
      <h1>Singles</h1>
      <section class="single" itemprop="track">
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="singles.php#article_0" class="hover-container">
              <img src="../images/maior/PRIMOGENITTO (ARTWORK POR MAIORMAJOR) (1).jpg" alt="Primogénitto" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">Primogénitto (c/ Il Brutto)<br>[+info]</h3>
            </a>
            <a href="https://ffm.to/primogenitto" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="singles.php#article_1" class="hover-container">
              <img src="../images/maior/Latitude.jpg" alt="Latitude" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">Latitude (prod. Elhi)<br>[+info]</h3>
            </a>
            <a href="https://distrokid.com/hyperfollow/maiormajor/latitude" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="singles.php#article_2" class="hover-container">
              <img src="../images/maior/FHL.jpg" alt="FHL" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">FHL (prod. ASIG)<br>[+info]</h3>
            </a>
            <a href="https://distrokid.com/hyperfollow/maiormajor/fhl-2" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="singles.php#article_3" class="hover-container">
              <img src="../images/maior/3000x3000-1959088--5C4756F4-AF35-4711-BCA0A573AEF31080--1589459732825--aljube.jpg" alt="Aljube" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">Aljube (prod. B Noize)<br>[+info]</h3>
            </a>
            <a href="https://distrokid.com/hyperfollow/maiormajor/aljube-2" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
      </section>
    </div>
    <div class="colabs-container" itemscope itemtype="http://schema.org/MusicGroup">
      <h1>Colabs</h1>
      <section class="colabs" itemprop="track">
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="colabs.php#article_0" class="hover-container">
              <img src="../images/maior/pibxis.jpg" alt="Carolos" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">Pibxis "Carolos"<br>[+info]</h3>
            </a>
            <a href="https://songwhip.com/pibxis/carolos" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
        <article itemscope itemtype="http://schema.org/MusicRecording">
          <figure><a href="colabs.php#article_1" class="hover-container">
              <img src="../images/maior/vulto.jpg" alt="Megalodon" itemprop="image">
              <h3 class="titulo-destaque" itemprop="name">VULTO. "Megalodon"<br>[+info]</h3>
            </a>
            <a href="https://songwhip.com/vulto/megalodon" target="_blank">OUVIR AGORA</a>
          </figure>
        </article>
      </section>
    </div>

  </main>

  <?php include('../templates/FOOTER-musica.php'); ?>
 