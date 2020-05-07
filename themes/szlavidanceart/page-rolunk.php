<?php

/**
 * The template for displaying Rólunk page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package szlavidanceart
 */

get_header();
?>
<main id="primary" class="site-main">
  <div class="container-fluid container-max-width p0">
    <div class="row mx-responsive p0">
      <div class="col-12 p0 mb1 m-mbhalf mt2 m-mt1">
        <?php
        if (is_front_page() && is_home()) :
        ?>
          <h1 class="h1 site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
        ?>
          <nav aria-label="breadcrumb mt2 m-mt1 mb1">
            <ol class="breadcrumb small-size">
              <li class="breadcrumb-item site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőoldal</a></li>
              <li class="breadcrumb-item active" style="padding-left: 0.3rem;" aria-current="page"><?php the_title() ?></li>
            </ol>
          </nav>
        <?php
        endif;
        ?>
      </div>
    </div>

    <div class="row mx-responsive-left p0">
      <div class="col-12 col-sm-12 col-md-12 col-lg-7 p0 pr2 m-pl-page m-pr-page pb2 m-pb-tablet-0">
        <?php
        while (have_posts()) :
          the_post();

          get_template_part('template-parts/content', 'rolunk');

          // If comments are open or we have at least one comment, load up the comment template.
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-5 p0 ml0">
        <?php get_sidebar(); ?>
      </div>
    </div>

    <?php get_footer(); ?>
  </div>
</main>