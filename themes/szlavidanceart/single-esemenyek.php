<?php

/**
 * The template for displaying all Előzetesek posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package szlavidanceart
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
    while (have_posts()) :
      the_post(); ?>
      <div class="container-fluid container-max-width p0">
        <div class="row mx-responsive p0">
          <div class="col-12 p0 mb0 mt2 m-mt1">
            <nav aria-label="breadcrumb mt2 m-mt1 mb1">
              <ol class="breadcrumb small-size">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőoldal</a></li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url('/esemenyek'); ?>" rel="home">Események</a></li>
                <li class="breadcrumb-item active" style="padding-left: 0.3rem;" aria-current="page"><?php the_title() ?></li>
              </ol>
            </nav>
            <?php the_title('<h1 class="h2 entry-title mt1 mb2 m-mb1">', '</h1>'); ?>
            <p class="bold-700 lucida-grande-bold"><?php echo get_the_excerpt() ?></p>
            <a href="<?php the_field('link') ?>" class="btn mt0 mb1"><i class="ri-calendar-event-fill service-icon"></i>Tovább az eseményhez</a>
          </div>
        </div>
      </div>
      <div class="container-fluid container-max-width p0">
        <div class="row mx-responsive-left p0">
          <div class="col-12 col-sm-12 col-md-12 col-lg-7 p0 pr2 m-pl-page m-pr-page pb2 m-pb-tablet-0">
            <div class="entry-content">
              <?php
              the_content();

              wp_link_pages(
                array(
                  'before' => '<div class="page-links">' . esc_html__('Pages:', 'szlavidanceart'),
                  'after'  => '</div>',
                )
              );

              ?>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-5 p0 ml0">
            <?php the_post_thumbnail('boritokep'); ?>
            <div class="embed-responsive embed-responsive-16by9 mt1 m-ml-16px mb2">
              <iframe class="embed-responsive-item" src="<?php the_field('youtube'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="entry-footer mb2 m-pl-page m-pr-page">
              <h3 class="small-size mt2 mbhalf">Kategóriák:</h3>
              <?php
              $out = array();
              $taxonomy_slug = 'kategoria';
              $terms = get_the_terms($post->ID, $taxonomy_slug);
              $out[] = '<nav class="mb2">';
              foreach ($terms as $term) {
                $out[] = sprintf(
                  '<a class="mrhalf small-size" href="%1$s">%2$s</a>',
                  esc_url(get_term_link($term->slug, $taxonomy_slug)),
                  esc_html($term->name)
                );
              }
              $out[] = "\n</nav>\n";
              echo implode('', $out);
              ?>
              <div style="margin-right: 16px;">
                <?php

                the_post_navigation(
                  array(
                    'prev_text' => '<span class="nav-subtitle pt1"><i class="ri-arrow-left-fill"></i>' . esc_html__('Előző:', 'szlavidanceart') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Következő:', 'szlavidanceart') . '</span> <span class="nav-title">%title<i class="ri-arrow-right-fill"></i></span>',
                  )
                );
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; // End of the loop. 
    ?>
  </main>
</div>

<?php
get_footer();
