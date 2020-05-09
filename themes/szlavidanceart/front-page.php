<?php get_header() ?>
<main>
  <section id="intro">
    <div class="bg-light-pink container-max-width">
      <div class="container-fluid p0">
        <div class="row mx-responsive p0">
          <div class="col-12 p0 mt3 m-mt2">
            <h1 class="mt2 main-title mb0 d-none d-sm-none d-md-none d-lg-block">SzlaVi &nbsp;&nbsp;&nbsp; Dance Art Tánciskola</h1>
            <h1 class="mt2 main-title-xl mb0 d-none">SzlaVi Dance Art Tánciskola</h1>
            <h1 class="text-bg-light mt0 main-title mb0 d-block d-sm-block d-md-block d-lg-none"><?php bloginfo('name'); ?></h1>
          </div>
          <div class="heroes d-none d-sm-none d-md-none d-lg-block">
            <img src="<?php echo get_template_directory_uri() ?>/images/szlavi-boritokep.png" alt="Szlavati Andrea és Vicsek János" />
          </div>
        </div>
        <div class="row mx-responsive p0">
          <div class="clearfix col-xxl-4 p0 hide-under-xxl">
            <img src="<?php echo get_template_directory_uri() ?>/images/szlavi-boritokep.png" alt="Szlavati Andrea és Vicsek János" />
          </div>
          <div class="clearfix col-12 col-sm-7 col-md-7 col-lg-7 col-xl-6 col-xxl-6 offset-lg-5 offset-xl-4 offset-xxl-0 mb4 m-mb2 pl2 x-pl0 m-p-tablet-0">
            <h2 class="mthalf sub-title mb2 "><span class="text-bg-white">Ahol öröm a tanulás</span></h2>
            <?php
            $szlavidanceart_description = get_bloginfo('description', 'display');
            if ($szlavidanceart_description || is_customize_preview()) :
            ?>
              <p class="clear-float text-bg-white site-description mb2 mt0"><?php echo $szlavidanceart_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                                        ?></p>
            <?php endif; ?>
            <nav class="m-mt-intro-nav">
              <a href="https://www.facebook.com/szlavidanceart/" class="btn mr1 m-mr0 mb1 m-clear-mr"><i class="ri-facebook-fill ri-xl" style="position: relative; top: 3px;"></i>Kövess Facebook-on</a>
              <a href="https://www.youtube.com/channel/UC4rLXh8fHYvk0kJwiSLCaxA" class="btn mb1"><i class="ri-youtube-line ri-xl mrquarter" style="position: relative; top: 3px;"></i>Kövess Youtube-on</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="bg-light-pink-tablet container-max-width">
        <div id="myCarouselNews" class="carousel carousel-intro slide container-max-width" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-inner">
              <?php
              $args = array(
                'post_type' => 'esemenyek',
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 1
              );

              $the_query = new WP_Query($args);
              ?>
              <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post() ?>
                  <div class="carousel-item active">
                    <div class="container-fluid p0">
                      <div class="row mx-responsive p0">
                        <div class="text-center col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 p0 m-mt2">

                          <?php the_post_thumbnail('boritokep', ['class' => 'mx-auto']) ?>

                          <div class="carousel-caption d-block">
                            <h3 class="m-carousel-h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <p class="d-none d-sm-block"><?php echo get_the_excerpt() ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile ?>
              <?php endif ?>

              <?php wp_reset_postdata(); ?>

              <?php
              $args = array(
                'post_type' => 'esemenyek',
                'orderby' => 'date',
                'order'   => 'DESC',
                'offset'  => 1,
                'posts_per_page' => 1
              );

              $the_query = new WP_Query($args);
              ?>
              <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post() ?>
                  <div class="carousel-item">
                    <div class="container-fluid p0">
                      <div class="row mx-responsive p0">
                        <div class="text-center col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 p0 m-mt2">
                          <?php the_post_thumbnail('boritokep'); ?>
                          <div class="carousel-caption d-block">
                            <h3 class="m-carousel-h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <p class="d-none d-sm-block"><?php echo get_the_excerpt() ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile ?>
              <?php endif ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
          <a class="carousel-control-prev no-underline mt2" href="#myCarouselNews" role="button" data-slide="prev" style="z-index: 100000;">
            <span aria-hidden="true">
              <i class="ri-arrow-left-s-line ri-2x gray-chevron"></i>
            </span>
            <span class="sr-only">Előző</span>
          </a>
          <a class="carousel-control-next no-underline mt2" href="#myCarouselNews" role="button" data-slide="next">
            <span aria-hidden="true">
              <i class="ri-arrow-right-s-line ri-2x gray-chevron"></i>
            </span>
            <span class="sr-only">Következő</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="offer">
    <div class="container-fluid container-max-width p0">
      <div class="row mx-responsive p0">
        <div class="col-12 text-center p0">
          <h2 class="mt4 m-mt3 mb2 m-align-left">Mit nyújtunk a számotokra?</h2>
        </div>

      </div>
      <div class="row mx-responsive p0">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1 col-xl-5 offset-xl-1 p0 pr1 m-pr0">
          <ul class="heart mt0 mb0">
            <li class="mb1">Minőségi és eredményes táncoktatást.</li>
            <li class="mb1">Nemcsak figurákat tanítunk, hanem mozgást fejlesztünk.</li>
            <li class="mb1">Az órák mindig bemelegítéssel kezdődnek és nyújtással végződnek.</li>
            <li class="mb1">Maximális odafigyelést.</li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1 col-xl-5 p0 pr2 m-pr0">
          <ul class="heart mt0 mb0">
            <li class="mb1">Ingyenes bemutatóórákat, ahol kipróbálhatod bármelyik táncstílust (sensual bachata, dominikai bachata).</li>
            <li class="mb1">Férfi és női szerepek megerősítése a tánc által, nőiesség, férfiasság fejlesztése.</li>
            <li class="mb1">Rendes táncteremben tartjuk az órákat, ahol mindenki látja magát a tükörben.</li>
            <li class="mb1">Online táncórákra is van lehetőség.</li>
          </ul>
        </div>
      </div>
      <div class="row mx-responsive-mobile-0 p0">
        <div class="col-12 col-sm-12 col-md-10 offset-md-1 text-center p0 mt3 m-mt2">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/IEbO3BMfYTA?rel=0&autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="services">
    <div class="container-fluid container-max-width p0">
      <div class="row mx-responsive p0">

        <div class="col-12 text-center p0">
          <h2 class="mt4 m-mt3 mb2 m-align-left">Szolgáltatásaink</h2>
        </div>
      </div>
      <div class="row mx-responsive p0">
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 m-p0">
          <div class="service-box text-center phalf mb1 m-mb2 m-align-left m-p-service-box">
            <h3 class="h5 mthalf">Csoportos táncoktatás</h3>
            <hr class="mbhalf">
            <span>Szegeden</span><br></br>
            <a title="Aktuális eseményeink" href="<?php echo esc_url('/esemenyek') ?>" class="btn m-btn-width100 mthalf"><i class="ri-calendar-event-fill service-icon"></i>Kurzusaink</a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 m-p0">
          <div class="service-box text-center phalf mb1 m-mb2 mt1 m-mt0 m-align-left m-p-service-box">
            <h3 class="h5 mthalf">Workshopok hétvégeken</h3>
            <hr class="mbhalf">
            <span>Megyünk, ha hívtok</span><br></br>
            <a title="Facebook események" href="https://www.facebook.com/pg/szlavidanceart/events/" class="btn m-btn-width100 mthalf">Részletek</a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 m-p0">
          <div class="service-box text-center phalf mb1 m-mb2 m-align-left m-p-service-box">
            <h3 class="h5 mthalf">Magánórák Szlavati Andival</h3>
            <hr class="mbhalf">
            <span>Egyéni vagy páros</span><br></br>
            <a title="Facebook szolgáltatások" href="https://www.facebook.com/pg/szlavidanceart/services/" class="btn m-btn-width100 mthalf">Részletek</a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 m-p0">
          <div class="service-box text-center phalf mb1 mt1 m-mt0 m-align-left m-p-service-box">
            <h3 class="h5 mthalf">Fellépések rendezvényeken</h3>
            <hr class="mbhalf">
            <span>Tel.: (30) 260 64 11</span><br></br>
            <a href="/rolunk" class="btn m-btn-width100 mthalf">Részletek</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="testimonials">
    <div class="container-fluid container-max-width p0">
      <div class="row p0 m0">
        <div class="col-12 p0 mt4 m-mt2">
          <img src="<?php echo get_template_directory_uri() ?>/images/csopifoto.jpg" alt="SzlaVi bachata ws csopifotó Hódmezőváráshelyen" />
        </div>
      </div>
    </div>

    <div class="bg-dark-pink-1 container-max-width">
      <div class="container-fluid p0">
        <div class="row mx-responsive text-center p0">
          <div class="col-12 align-left p0">
            <h2 class="h2 mb2 m-mb1 mt4 m-mt2 white">Miért szeretnek hozzánk járni a tanítványaink?</h2>
          </div>
        </div>
      </div>
      <div id="myCarousel" class="carousel slide container-max-width" data-ride="carousel">
        <ol class="carousel-indicators opacity-0">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner row w-100 mx-auto">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid p0 m0">
                <div class="row mx-responsive p0">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1 p0">
                    <div class="row p0 m0">
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mt1 mb2">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/bela.png" alt="Béla">
                            <h3 class="medium-size text-center mthalf">T. Béla</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Magas színvonalú oktatás, a többi tánciskolához képest hangsúlyt fektetve a testizolációra és technikai részletekre. Ez főleg a hölgyek mozgásának fejlődésén látványos. Ezen felül a jó hangulat és a remek társaság külön motivációt jelent.</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/bela.png" alt="Béla">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">T. Béla</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/peti.png" alt="Péter">
                            <h3 class="medium-size text-center mthalf">B. Péter</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Én azért szeretek nálatok táncolni, mert különleges dolgokat lehet tanulni, részletes magyarázattal, ráadásul remek társaságban.</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/peti.png" alt="Péter">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">B. Péter</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mt1 m-mt2 mb2">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person d-none d-sm-none d-md-block">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/szilvi.png" alt="Szilvia">
                            <h3 class="medium-size text-center mthalf">N. Szilvi</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Alapos tánctudásra lehet szert tenni, a hibák kijavításra kerülnek, így jobban lehet fejlődni. A jó társaság plusz inspirációt ad. Kedves, közvetlen, baráti a légkör.</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/szilvi.png" alt="Szilvia">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">N. Szilvi</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mb2 m-mt-minus-70">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/balazs.png" alt="Balázs">
                            <h3 class="medium-size text-center mthalf">A. Balázs</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Amióta veletek táncolok, sokat fejlődött a tánctudásom (...). Úgy érzem, itt olyan dolgokkal egészíthetem ki a táncomat, melyek által autentikusabbá és élvezhetőbbé tehetem azt. Nagyon örülök a csapatnak, és hogy együtt táncolhatunk.</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/balazs.png" alt="Balázs">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">A. Balázs</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid p0 m0">
                <div class="row mx-responsive p0">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1 p0">
                    <div class="row p0 m0">
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mt1 mb2">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/zoran.png" alt="Zorán">
                            <h3 class="medium-size text-center mthalf">Z. Zorán</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Színvonalas a táncoktatás! Minden felmerülő kérdést megbeszélünk, letisztázunk annak érdekében, hogy mindenki maradéktalanul elsajátíthassa a tanult lépéseket, elemeket! A légkör családias, a hangulat mindig nagyon jó!</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/zoran.png" alt="Zorán">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">Z. Zorán</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/ati.png" alt="Attila">
                            <h3 class="medium-size text-center mthalf">M. Attila</h3>
                          </div>
                          <div class="testimonial-text pb3 pt3 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Jó hangulat, jó társaság, jó tánc.</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/ati.png" alt="Attila">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">M. Attila</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mt1 m-mt2 mb2">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person d-none d-sm-none d-md-block">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/istvan.png" alt="István">
                            <h3 class="medium-size text-center mthalf">H. István</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Szép, és nagyon kedves a Tanár néni.. A Tanár bácsi okos, és barátságos... Szeretem nézni, amikor táncolnak... Közvetlen, baráti a légkör, meg lehet beszélni mindent... Jó a társaság...</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/istvan.png" alt="István">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">H. István</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p0 clearfix mb2 m-mt-minus-70">
                        <div class="my-auto testimonial-box mr1 m-mr0">
                          <div class="float-left testimonial-person">
                            <img class="profile-img" src="<?php echo get_template_directory_uri() ?>/images/profile/andi.png" alt="Andrea">
                            <h3 class="medium-size text-center mthalf">Z. Andrea</h3>
                          </div>
                          <div class="testimonial-text pb2 pt2 pl1 pr1 m-pb0">
                            <span class="quote-sign">”</span>
                            <blockquote>Hogy miért szeretünk nálatok tanulni? Mert a profizmuson túl, a hovatartozás élményével is megajándékoztok bennünket!</blockquote>
                          </div>
                          <div class="testimonial-person-small clearfix">
                            <div class="pl1 pthalf pb1" style="line-height: 45px;">
                              <img class="float-left profile-img-small" src="<?php echo get_template_directory_uri() ?>/images/profile/andi.png" alt="Andrea">
                              <span class="medium-size bold-700 lucida-grande-bold plhalf mthalf">Z. Andrea</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev no-underline" href="#myCarousel" role="button" data-slide="prev" style="z-index: 100000;">
          <span aria-hidden="true">
            <i class="ri-arrow-left-s-line ri-2x gray-chevron"></i>
          </span>
          <span class="sr-only">Előző</span>
        </a>
        <a class="carousel-control-next no-underline" href="#myCarousel" role="button" data-slide="next">
          <span aria-hidden="true">
            <i class="ri-arrow-right-s-line ri-2x gray-chevron"></i>
          </span>
          <span class="sr-only">Következő</span>
        </a>
      </div>
    </div>
  </section>


  <section id="cta-area">
    <div class="container-fluid container-max-width p0">
      <div class="row mx-responsive-left p0 mt4 m-mt2">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2 order-sm-2 order-md-2 order-lg-1 p0 m-pl-16px m-pr-tablet-16px m-pl-tablet-16px m-bg-light pb3">
          <h2 class="h2 mt1 mb1">Gyere és próbáld ki a bachatát!</h2>
          <p class="mb1 pr2">Csatlakozz a csapatunkhoz! Egy próbát biztosan megér. A Facebook-on nagyon aktívak vagyunk, ott hirdetjük meg táncos eseményeinket. Ne maradj le!</p>
          <nav>
            <a href="https://www.facebook.com/szlavidanceart/" class="btn mrhalf mt1"><i class="ri-facebook-fill ri-xl icon-position-3"></i>Kövess Faccebook-on</a>
            <a href="https://www.youtube.com/channel/UC4rLXh8fHYvk0kJwiSLCaxA" class="btn mt1"><i class="ri-youtube-line ri-xl mrquarter icon-position-3"></i>Kövess Youtube-on</a>
          </nav>
          <span class="small-size secondary-gray">Kövesd vagy kedveld az oldalunkat!</span>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-2 p0">
          <img src="<?php echo get_template_directory_uri() ?>/images/d2-csapatkep-1.jpg" alt="D2 csapatkép" />
        </div>
      </div>
      <div class="row mx-responsive-right p0 m0">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p0">
          <img src="<?php echo get_template_directory_uri() ?>/images/szlavi-tancberletek.jpg" alt="SzlaVi táncbérletek" />
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pl2 m-pr-tablet-16px m-pl-tablet-16px m-bg-light pb1">
          <h2 class="h2 mt1 mb1">Biztonságos vásárlás online</h2>
          <p class="mb2">A webáruházunkon keresztül is megvásárolhatod a bérletedet utalással, ha úgy kényelmesebb neked!</p>
          <nav>
            <a href="https://szlavidanceart.superwebaruhaz.hu/" class="btn mrhalf"><i class="ri-shopping-cart-2-line ri-xl icon-position-3" style="margin-right: 4px;"></i>Webáruházunk megnyílt</a>
          </nav>
          <span class="small-size small-size secondary-gray pl1">Tekintsd meg a kínálatunkat!</span>
        </div>
      </div>
    </div>
  </section>


  <section id="benefits">
    <div class="bg-napocska mt4 m-mt2">
      <div class="container-fluid container-max-width p0">
        <div class="row mx-responsive p0">
          <div class="col-12 text-center p0">
            <h2 class="h2 mt0 mb2 m-align-left">Milyen előnyeid származnak a bachatából?</h2>
          </div>
        </div>
        <div class="row mx-responsive p0">
          <div class="col-12 col-sm-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1 col-xl-5 offset-xl-1 p0 pr1 m-pr0">
            <ul class="heart mt0 mb0">
              <li class="mb1">Boldoggá tesz.</li>
              <li class="mb1">Fejleszti a személyiségedet.</li>
              <li class="mb1">Hozzájárul a lelki kiegyensúlyozottsághoz.</li>
              <li class="mb1">Jótékonyan hat a mentális egészségre.</li>
              <li class="mb1">Felerősíti a férfi és női szerepeket.</li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1 col-xl-5 p0 pr2 m-pr0">
            <ul class="heart mt0 mb0">
              <li class="mb1">Alakot formál, javítja a testtartást.</li>
              <li class="mb1">Testedzés, jól átmozgat, rugalmaságot fejleszt.</li>
              <li class="mb1">Jó hatással van a keringésre és a szívre.</li>
              <li class="mb1">Kikapcsolódást nyújt, szórakoztató, a közösségbe tartozás élményével jár.</li>
              <li class="mb1">Barátokat szerzel, ismerkedhetsz másokkal.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact">
    <div class="container-fluid container-max-width p0">
      <div class="row mx-responsive p0">
        <div class="col-12 p0">
          <h2 class="mt3 m-mt2">Kik vagyunk?</h2>
        </div>
      </div>
      <div class="row mx-responsive p0">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-1 order-md-1 order-lg-1 p0">
          <h3 class="h5">Szlavati Andrea <span class="medium-size">(kapcsolattartó)</span></h3>
          <ul class="no-bullets mb0">
            <li class="mbhalf"><i class="ri-phone-line ri-lg no-underline icon-position-3 mrquarter"></i><a href="tel:+36302606411">(30) 260 64 11</a></li>
            <li class="mbhalf"><i class="ri-mail-line ri-lg no-underline icon-position-3 mrquarter"></i><a href="mailto:szlavati.andrea.lyo@gmail.com">szlavati.andrea.lyo@gmail.com</a></li>
            <li class="mbhalf"><i class="ri-messenger-line ri-lg no-underline icon-position-3 mrquarter"></i><a href="https://m.me/szlavidanceart">Messenger üzenet</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-3 order-md-2 order-lg-2 text-center p0">
          <img src="<?php echo get_template_directory_uri() ?>/images/szives-kep.png" alt="SzlaVi szives kép" />
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-2 order-md-3 order-lg-3 p0 pl1 m-pl0">
          <h3 class="h5">Vicsek János</h3>
          <p>Andrea táncpartnere</p>
        </div>
      </div>
    </div>
    </div>
    <div class="bg-dark-pink-2 container-max-width mt-minus100">
      <div class="container-fluid p0">
        <div class="row mx-responsive p0">
          <div class="col-12 text-center p0">
            <h3 class="h4 mt5 mb1 white">Történetünk</h3>
          </div>
        </div>
        <div class="row mx-responsive p0 pb3 m-pb2">
          <div class="col-12 col-md-6 col-lg-6 p0 mt1 white">
            <p>Szlavati Andrea vagyok és 2014-ben kezdtem el táncolni. 2015-ben 2. helyezést értem el a Bachata Magyar Bajnokságon, amatőr kategóriában: <a class="white-link" href="#" target="_blank">a videón a piros ruhában táncoló</a> vagyok.</p>
            <p>2017-ben kezdtem el táncot tanítani. Azóta már hivatásszerűen kizárólag a tánccal foglalkozom. 2019-től táncpartnerem Vicsek János, aki első, legrégebbi tanítványom is egyben.</p>
            <p>Fő területünk a bachata, mely egy forró égövi, páros tánc, aminek több stílusát is tanítjuk. Imádjuk a zenét is, a táncot is: mindent, ami bachata! </p>
          </div>
          <div class="col-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1 p0 mt1 white">
            <p>Emellett foglalkozunk még minimális szinten a kizombával és a salsával, mely táncok alapjait elsajátítani nálunk kizárólag magánórán lehetséges. Tudunk benne segíteni, ha nagyon szeretnéd, de alapvetően mi a bachatára helyezzük a fő hangsúlyt... <a class="white-link uppercase" href="/rolunk">Tovább olvasom<i class="ri-arrow-right-line"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="location">
    <div class="container-fluid container-max-width p0">
      <div class="row mx-responsive p0">
        <div class="col-12 text-center p0">
          <h2 class="mt5 m-mt3 mb2 m-align-left">Az óráink fő helyszínei</h2>
        </div>
      </div>
      <div class="row mx-responsive-mobile-0 p0 mb5 m-mb3">
        <div class="col-12 col-md-6 col-lg-6 mb2 m-p0">
          <iframe class="map-size" src="https://maps.google.com/maps?q=Forma%201%20Fitness%20Szeged%20Szeged%2C%20Attila%20u.%2019%2C%206722&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <div class="m-pr-16px m-pl-16px">
            <h3 class="h5 mbhalf">Forma 1 Fitnesz Stúdió</h3>
            <hr class="mbhalf mr2">
            <span>6700 Szeged, Attila u. 17-19. legfelső emelet</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 m-p0">
          <iframe class="map-size" src="https://maps.google.com/maps?q=Bessenyei%20Ferenc%20M%C5%B1vel%C5%91d%C3%A9si%20K%C3%B6zpont&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <div class="m-pr-16px m-pl-16px">
            <h3 class="h5 mbhalf">Bessenyei Ferenc Műv. Központ táncterme</h3>
            <hr class="mbhalf">
            </hr>
            <span>6800 Hódmezővásárhely, Dr. Rapcsák András út 7.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>