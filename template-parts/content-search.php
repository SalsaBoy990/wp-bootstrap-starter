<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row m0 mb3">
		<div class="col-12 col-md-5 p0 mbhalf">
			<?php bootstrap_starter_post_thumbnail(); ?>
		</div>
		<div class="col-12 col-md-7 p0 pl2 m-pl0 m-pl-16px m-pr-tablet-16px m-pl-tablet-16px m-bg-light">
			<header class="entry-header">
				<h2 class="h3 mt0 mb0 mbhalf"><a href="<?php esc_url(the_permalink()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php if ('hirek' === get_post_type()) : ?>
					<span class="bold-700 secondary-gray roboto"><i class="ri-calendar-event-fill service-icon"></i><?php the_field('idopont'); ?></span>
				<?php endif; ?>
				<?php if ('post' === get_post_type()) : ?>
					<div class="entry-meta">
						<?php
						bootstrap_starter_posted_on();
						bootstrap_starter_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-summary">
				<p class="mb1 mt1"><?php the_excerpt() ?></p>
				<a class="btn mbhalf" href="<?php the_permalink(); ?>">Tovább olvasom <i class="ri-arrow-right-fill"></i></a>
			</div><!-- .entry-summary -->
			<footer class="entry-footer">
				<?php bootstrap_starter_entry_footer(); ?>
			</footer><!-- .entry-footer-->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->