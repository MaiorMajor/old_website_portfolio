<?php include('./templates/HEAD-artes.php'); ?>

<body class="artes">

  <?php include('./templates/PRELOADER-artes.php'); ?>

  <header class="artes">

    <?php include('./templates/TICKER.php'); ?>

    <?php include('./templates/Menu Nav Global/ASIDE-artes.php'); ?>

    <?php include('./templates/NAVBAR-belasartes.php'); ?>


  </header>
  <section class="submenu">
    <nav id="sub-nav" class="subnavbar">
      <ul>
        <li class="selected">
          <a>Abstrato</a>
        </li>
        <li><a href="realismo.php">Realismo</a></li>
      </ul>
    </nav>
    <nav class="menu_quadrados">
      <ol class="article_selector">
        <li class="square" data-index="0"><a onClick="showSlide(0)" title="Golden Buzzer"></a></li>
        <li class="square" data-index="1"><a onClick="showSlide(1)" title="Vinho"></a></li>
        <li class="square" data-index="2"><a onClick="showSlide(2)" title="Maior Major"></a></li>
        <li class="square" data-index="3"><a onClick="showSlide(3)" title="Vento"></a></li>
      </ol>
    </nav>
  </section>

  <main class="artes">
    <div class="slider-container">
      <section class="slider" id="abstrato_slider" itemscope itemtype="http://schema.org/ItemList">
        <article class="slide" id="article_1" itemprop="itemListElement" itemscope
          itemtype="http://schema.org/CreativeWork">
          <figure id="image-container">
            <img src="../images/abstrato/golden.jpg" alt="quadro abstrato" itemprop="image" >
          </figure>
          <p><em>Título: </em><span itemprop="name">Golden Buzzer</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2020</span></p>
        </article>
        <article class="slide" id="article_2" itemprop="itemListElement" itemscope
          itemtype="http://schema.org/CreativeWork">
          <figure id="image-container">
            <img src="../images/abstrato/vinho.jpg" alt="quadro abstrato" itemprop="image" >
          </figure>
          <p><em>Título: </em><span itemprop="name">Vinho</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2020</span></p>
        </article>
        <article class="slide" id="article_3" itemprop="itemListElement" itemscope
          itemtype="http://schema.org/CreativeWork">
          <figure id="image-container">
            <img src="../images/abstrato/maior.jpg" alt="quadro abstrato" itemprop="image" >
          </figure>
          <p><em>Título: </em><span itemprop="name">Maior Major</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2020</span></p>
        </article>
        <article class="slide" id="article_4" itemprop="itemListElement" itemscope
          itemtype="http://schema.org/CreativeWork">
          <figure id="image-container">
            <img src="../images/abstrato/vento.jpg" alt="quadro abstrato" itemprop="image" >
          </figure>
          <p><em>Título: </em><span itemprop="name">Vento</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2020</span></p>
        </article>
      </section>
      <?php include('./templates/BOTOES.php'); ?>
    </div>
  </main>

  <?php include('./templates/FOOTER-artes.php'); ?>