<?php include('../templates/HEAD-artes.php'); ?>

<body class="artes">

  <?php include('../templates/PRELOADER-artes.php'); ?>

  <header class="artes">

    <?php include('../templates/TICKER.php'); ?>

    <?php include('../templates/Menu Nav Global/ASIDE-artes.php'); ?>

    <?php include('../templates/NAVBAR-belasartes.php'); ?>
    
  </header>

  <section class="submenu">
    <nav id="sub-nav" class="subnavbar">
      <ul>
        <li>
          <a href="abstrato.php">Abstrato</a>
        </li>
        <li class="selected"><a>Realismo</a></li>
      </ul>
    </nav>
    <nav class="menu_quadrados">
      <ol class="article_selector">
        <li class="square square1" data-index="0"><a onClick="showSlide(0)" title="Autorretrato em scrapeboard"></a>
        </li>
        <li class="square square2" data-index="1"><a onClick="showSlide(1)" title="Estudo de cabeça - ICBAS"></a></li>
        <li class="square square3" data-index="2"><a onClick="showSlide(2)" title="Compasso"></a></li>
        <li class="square square4" data-index="3"><a onClick="showSlide(3)" title="Sir Scratch - Retrato"></a></li>
        <li class="square square5" data-index="4"><a onClick="showSlide(4)" title="Ever - Retrato"></a></li>
        <li class="square square6" data-index="5"><a onClick="showSlide(5)" title="Autorretrato a óleo"></a></li>
        <li class="square square7" data-index="6"><a onClick="showSlide(6)" title="Estudo de Sacarrolhas"></a></li>
        <li class="square square8" data-index="7"><a onClick="showSlide(7)" title="Diretor - Retrato"></a></li>
        <li class="square square9" data-index="8"><a onClick="showSlide(8)" title="O Sacrifício"></a></li>
      </ol>
    </nav>
  </section>

  <main class="artes">
    <div class="slider-container">
      <section class="slider" itemscope itemtype="http://schema.org/ItemList">
        <article class="slide autorretrato1" id="article_1" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/autorretrato.jpg" alt="Autorretrato" class="autorretrato" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Autorretrato em scrapeboard</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">20 x 14 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2019</span></p>
        </article>
        <article class="slide" id="article_2" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/cabeça.jpg" alt="Desenho de uma Cabeça" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Estudo de cabeça - ICBAS</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">23.5 x 19 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2019</span></p>
        </article>
        <article class="slide" id="article_3" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/DSC_0401.jpg" alt="Desenho de Casa Abandonada" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Compasso</span></p>
          <p><em>Dimensões:</em> <span itemprop="size">A3 (29.7 x 42 cm)</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2018</span></p>
        </article>
        <article class="slide" id="article_4" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/Screenshot_20230331_184626_Instagram.jpg" alt="Retrato Sir Scratch" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Sir Scratch - Retrato</span></p>
          <p>Lápis de Grafite sobre papel.</p>
          <p><em>Dimensões:</em> <span itemprop="size">20 x 20 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2018</span></p>
        </article>
        <article class="slide" id="article_5" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/Screenshot_20230331_184702_Instagram.jpg" alt="Retrato Ever" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Ever - Retrato</span></p>
          <p><em>Técnica:</em> Lápis de Grafite sobre papel.</p>
          <p><em>Dimensões:</em> <span itemprop="size">20x20cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2018</span></p>
        </article>
        <article class="slide" id="article_6" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/DSC_0374.jpg" alt="autorretrato a óleo" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Autorretrato 2019</span></p>
          <p><em>Técnica:</em> Óleo sobre tela.</p>
          <p><em>Dimensões:</em> <span itemprop="size">60 x 50 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2019</span></p>
        </article>
        <article class="slide" id="article_7" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/sacarrolhas.jpg" alt="estudo de sacarrolhas" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Estudo de Sacarrolhas</span></p>
          <p><em>Técnica:</em> Grafite sobre papel.</p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2016</span></p>
        </article>
        <article class="slide" id="article_8" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/diretor.jpg" alt="retrato" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">Diretor - Retrato</span></p>
          <p><em>Técnica:</em> Esferográfica sobre papel.</p>
          <p><em>Dimensões:</em> <span itemprop="size">42 x 59 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2017</span></p>
        </article>
        <article class="slide" id="article_9" itemprop="itemListElement" itemscope itemtype="http://schema.org/CreativeWork">
          <figure>
            <img src="../images/sacrificio.jpg" alt="retrato" itemprop="image">
          </figure>
          <p><em>Título: </em><span itemprop="name">O Sacrifício</span></p>
          <p><em>Técnica:</em> Grafite sobre papel</p>
          <p><em>Dimensões:</em> <span itemprop="size">70 x 70 cm</span></p>
          <p><em>Data:</em> <span itemprop="dateCreated">2015</span></p>
        </article>
      </section>

      <?php include('../templates/BOTOES.php') ?>

    </div>

  </main>


  <?php include('../templates/FOOTER-artes.php'); ?>
