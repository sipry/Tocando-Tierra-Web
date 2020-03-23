<?php get_header(); ?>

<section class="banner-pages">
  <div class="text-home">
  <h2>Contantanos</h2>
  <h3>centro ecopsicologico de puerto rico</h3>
</div>
</section>

<?php while(have_posts()) {
    the_post(); ?>
    <div class="contactanos">
      <h3>Contactanos</h3>
    </div>
    <?php the_content(); }?>



<?php get_footer(); ?>
