<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package szlavidanceart
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row m0 mb3">
		<div class="col-12 col-md-5 p0 mbhalf">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
		<div class="col-12 col-md-7 p0 pl2 m-pl0 m-pl-16px m-pr-tablet-16px m-pl-tablet-16px m-bg-light">
			<h2 class="h3 mt0 mb0 mbhalf"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span class="bold-700 secondary-gray lucida-grande-bold"><i class="ri-calendar-event-fill service-icon"></i><?php the_field('idopont');?></span>
			<p class="mb1 mt1"><?php the_excerpt() ?></p>
			<a class="btn mbhalf" href="<?php the_permalink(); ?>">Tovább olvasom <i class="ri-arrow-right-fill"></i></a>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->