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
                <li>
                    <a href="design.php">Design</a>
                </li>
                <li><a href="ilustracao.php">Ilustração</a></li>
                <li class="selected">
                    <a>Vídeo</a>
                </li>
            </ul>
        </nav>

        <nav class="menu_quadrados">
            <ol class="article_selector">
                <li class="square" data-index="0"><a onClick="showSlide(0)" title="D'oiro"></a></li>
                <li class="square" data-index="1"><a onClick="showSlide(1)" title="Bandeira"></a></li>
                <li class="square" data-index="2"><a onClick="showSlide(2)" title="Ao Postigo"></a></li>
                <li class="square" data-index="3"><a onClick="showSlide(3)" title="Synchresis"></a></li>
                <li class="square" data-index="4"><a onClick="showSlide(4)" title="Video, Space, Object"></a></li>
                <li class="square" data-index="5"><a onClick="showSlide(5)" title="Eva Resende"></a></li>
            </ol>
        </nav>
        
    </section>

    <main class="artes">
        <div class="slider-container">
            <section class="slider" id="design_slider">
                <article class="slide" id="article_1" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ds-AWzWQQik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">D'Oiro</span></p>
                    <p><em>Duração:</em> <span itemprop="duration">5m11s</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2023</span></p>
                </article>
                <article class="slide" id="article_2" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DHZ68eV7wwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">Bandeira</span></p>
                    <p><em>Duração:</em> <span itemprop="duration">0m55s</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2020</span></p>
                </article>
                <article class="slide" id="article_3" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ec9WdAVYq08" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">Exposição "Ao Postigo"</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2021</span></p>
                </article>
                <article class="slide" id="article_4" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aWO3TlsLghk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">Synchresis</span></p>
                    <p><em>Duração:</em> <span itemprop="duration">1m55s</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2020</span></p>
                </article>
                <article class="slide" id="article_5" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gJJ-YlHjo7Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">Video, Space, Object</span></p>
                    <p><em>Duração:</em> <span itemprop="duration">1m55s</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2020</span></p>
                </article>
                <article class="slide" id="article_6" itemprop="itemListElement" itemscope itemtype="http://schema.org/VideoObject">
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/v_MWB_h9xOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hpKK_3sunEs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <figure>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Uw2gBk3D-o8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                    <p><em>Título: </em><span itemprop="name">Colaboração com artista plástica Eva Resende.</span></p>
                    <p><em>Data:</em> <span itemprop="uploadDate">2021-2023</span></p>
                </article>
            </section>
            <?php include('./templates/BOTOES.php'); ?>
        </div>
    </main>

    <?php include('./templates/FOOTER-artes.php'); ?>

 