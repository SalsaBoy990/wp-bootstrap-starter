<?php get_header(); ?>
<main id="primary" class="site-main">
  <div class="container-fluid container-max-width p0">
    <div class="row mx-responsive p0">
      <div class="col-12 p0 mb1 m-mbhalf mt2 m-mt1">
        <nav aria-label="breadcrumb mt2 m-mt1 mb1">
          <ol class="breadcrumb small-size">
            <li class="breadcrumb-item site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőoldal</a></li>
            <li class="breadcrumb-item active" style="padding-left: 0.3rem;" aria-current="page"><?php the_title() ?></li>
          </ol>
        </nav>
        <h1 class="h2 mb2 m-mb1">Aktuális események</h1>
      </div>
    </div>
    <div class="row mx-responsive-mobile-0 mx-responsive-right p0">
      <div class="col-12 p0 pb2 m-pb-tablet-0">
        <?php
        $args = array(
          'post_type' => 'esemenyek'
        );

        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php get_template_part('template-parts/content', 'esemenyek'); ?>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>