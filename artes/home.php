<?php include('./templates/HEAD-artes.php'); ?>

<body class="artes">
  <?php include('./templates/PRELOADER-artes.php'); ?>
  <header class="artes">

    <?php include('./templates/TICKER.php'); ?>

    <?php include('./templates/Menu Nav Global/ASIDE-artes.php'); ?>

    <nav id="main-nav" class="navbar">
      <div class="nav-logo-container">
        <a href="./index.php"><img src="../images/logojm.png" alt="Logo" class="logo" /></a>
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
        <li class="list"><a href="about.php"><strong>SOBRE MIM</strong></a></li>
      </ul>
    </nav>
  </header>


  <main id="jorge" class="jorgehtml artes" itemscope itemtype="http://schema.org/Article">
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="realismo.php#article_0" class="hover-container">
          <img src="../images/autorretrato.jpg" alt="Autorretrato" itemprop="url">
          <h3 itemprop="name">Autorretrato em scrapeboard</h3>
        </a>
      </figure>
    </article>
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="realismo.php#article_1" class="hover-container">
          <img src="../images/cabeça.jpg" alt="Desenho de uma Cabeça" itemprop="url">
          <h3 itemprop="name">Estudo de cabeça - ICBAS</h3>
        </a>
      </figure>
    </article>
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="vídeo.php#article_5" class="hover-container-2">
          <img src="../images/evaresende.jpg" alt="Eva Resende" itemprop="url">
          <h3 itemprop="name">Colaboração com Eva Resende</h3>
        </a>
      </figure>
    </article>
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="realismo.php#article_2" class="hover-container-2">
          <img src="../images/DSC_0401.jpg" alt="Desenho de Casa Abandonada" itemprop="url">
          <h3 itemprop="name">Compasso</h3>
        </a>
      </figure>
    </article>
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="ilustração.php#article_1" class="hover-container-2">
          <img src="../images/TRIZ.jpg" alt="Ilustração de Tubarão gigante" itemprop="url">
          <h3 itemprop="name">Triz</h3>
        </a>
      </figure>
    </article>
    <article itemprop="articleBody">
      <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject"><a href="realismo.php#article_5" class="hover-container">
          <img src="../images/DSC_0374.jpg" alt="autorretrato a óleo" itemprop="url">
          <h3 itemprop="name">Autorretrato 2019</h3>
        </a>
      </figure>
    </article>
  </main>

  <?php include('./templates/FOOTER-artes.php'); ?>
