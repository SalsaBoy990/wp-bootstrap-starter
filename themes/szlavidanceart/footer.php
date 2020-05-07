<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package szlavidanceart
 */

?>
<footer id="colophon" class="site-footer">
	<div class="footer-light mt3 m-mt2 pt3 m-pt2 container-max-width">
		<div class="container-fluid p0">
			<div class="row mx-responsive p0 pb2">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 p0 pr1 m-pr0">
					<h2 class="base-size mt0"><?php bloginfo('name'); ?> Szeged</h2>
					<p class="medium-size"><?php bloginfo('description'); ?></p>
					<ul class="no-bullets small-size">
            <li class="mbhalf"><a class="no-underline" href="tel:+36302606411"><i class="ri-phone-fill ri-lg no-underline icon-position-3 icon-mr-3"></i>(30) 260 64 11</a></li>
            <li class="mbhalf"><a class="no-underline" href="mailto:szlavati.andrea.lyo@gmail.com"><i class="ri-mail-fill ri-lg no-underline icon-position-3 icon-mr-3"></i>szlavati.andrea.lyo@gmail.com</a></li>
            <li class="mbhalf"><a class="no-underline" href="https://m.me/szlavidanceart"><i class="ri-messenger-fill ri-lg no-underline icon-position-3 icon-mr-3"></i>Messenger üzenet</a></li>
          </ul>
					<ul class="no-bullets small-size">
						<li>
							<a href="/rolunk">Rólunk</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-3 offset-lg-1 p0 prhalf mb15">
					<h3 class="base-size mt0">Kövesd a fejleményeket!</h3>
					<ul class="no-bullets no-list-image medium-size">
						<li class="mbhalf"><a class="no-underline" href="https://www.youtube.com/channel/UC4rLXh8fHYvk0kJwiSLCaxA"><i class="ri-youtube-fill ri-lg icon-position-3 icon-mr-3"></i>Youtube csatorna</a></li>
						<li class="mbhalf"><a class="no-underline" href="https://www.facebook.com/szlavidanceart/"><i class="ri-facebook-box-fill ri-lg icon-position-3 icon-mr-3"></i>Facebook oldal</a></li>
						<li class="mbhalf"><a class="no-underline" href="https://szlavidanceart.superwebaruhaz.hu/"><i class="ri-shopping-cart-2-fill ri-lg icon-position-3 icon-mr-3"></i>Webáruházunk</a></li>
					</ul>
					<div class="fb-page" data-href="https://www.facebook.com/szlavidanceart/" data-tabs="" data-width="240" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/szlavidanceart/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/szlavidanceart/">SzlaVi Dance Art</a></blockquote>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 p0 pl1 m-pl0">
					<h3 class="base-size mt0">Impresszum</h3>
					<ul class="no-bullets small-size">
						<li>Szolgáltató (eladó): Szlavati Andrea e.v.</li>
						<li>Foglalkozás: táncoktató és táncos</li>
						<li>EV nyilvántartási szám: 54418435</li>
						<li>Adószám: 53417022-1-23</li>
						<li>Székhely: 6455 Katymár, Gr. Széchenyi I. u. 37.</li>
						<li>Telefon: 06-30-260-6411</li>
						<li>E-mail: szlavati.andrea.lyo@gmail.com</li>
					</ul>

					<!-- <ul class="no-bullets small-size">
						<li class="mbhalf"><a href="#">Általános Szerződési Feltételek</a></li>
						<li class="mbhalf"><a href="#">Adatkezelési tájékoztató</a></li>
					</ul> -->

				</div>
			</div>
		</div>
	</div>
	<div class="footer-dark">
		<div class="container-fluid container-max-width p0">
			<div class="row mx-responsive p0">
				<div class="col-6 col-sm-6 col-md-6 p0 my-auto m-copyright">
					<button title="Oldal tetejére" class="scroll-to-top text-center" id="scrollToTop"><i class="ri-arrow-up-fill ri-3x" style="margin-left: -5px;"></i></button>
					<span class="min-size white">&copy; SzlaVi Dance Art 2020. Minden jog fenntartva.</span>
				</div>
				<div class="col-6 col-sm-6 col-md-6 clearfix p0">
					<nav class="float-right mr1 footer-social">
						<a class="white-link no-underline" href="#" title="Facebook oldal"><i class="ri-facebook-box-fill ri-3x"></i></a>
						<a class="white-link no-underline" href="#" title="Youtube csatorna"><i class="ri-youtube-fill ri-3x"></i></a>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>