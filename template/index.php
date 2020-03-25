<?php get_header(); ?>
<!-- Banner -->
<section class="banner-pages" id="home">
  <div class="text-home">
  <h2>Actividades</h2>
  <h3>centro ecopsicologico de puerto rico</h3>
</div>
</section>

<div class="container">
<?php
    if ( have_posts() ) {
       while ( have_posts() ) {
           the_post(); ?>
<div class="card mb-3 bd-highlight mx-auto">
  <div class="row no-gutters">
    <div class="col-lg-6 p-2 w-100 bd-highlight thumbnail">
      <img class="card-img" src="<?php the_post_thumbnail_url();?>">
    </div>
    <div class="col-lg-6 p-2 flex-shrink-1 bd-highlight">
      <div class="card-body">
        <h5 class="card-title"><?php echo get_the_title(); ?></h5>
        <p class="card-text date"><small class="text-muted"><?php the_field('fecha_actividades'); ?></small></p>
        <p class="card-text lorem"><?php echo wp_trim_words(get_the_content(), 20)?></p>
        <a class="btn card-btn" href="<?php the_permalink(); ?>" role="button"> Ver mas</a>
      </div>
    </div>
  </div>
</div>

<?php } wp_reset_postdata();// end while
       } // end if
       ?>
</div>
</div>
<?php get_footer(); ?>
