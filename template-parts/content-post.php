<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if (is_singular()) :
      the_title('<h1 class="h2 entry-title mb2 m-mb1">', '</h1>');
    else :
      the_title('<h2 class="h3 entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;
    ?>
  </header><!-- .entry-header -->

  <div class="entry-content mb3">
    <div class="row m0">
      <div class="col-12 col-sm-12 col-md-8 col-lg-8 bg-lighter-gray">
        <?php bootstrap_starter_post_thumbnail('thumbnail'); ?>
        <?php
        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bootstrap_starter'),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post(get_the_title())
          )
        );
        ?>
      </div>
    </div>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <!-- <?php bootstrap_starter_entry_footer(); ?> -->
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->