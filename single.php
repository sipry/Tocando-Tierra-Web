<?php get_header(); ?>

<section class="banner-pages" id="home">
  <div class="text-home">
  <h2><?php the_title(); ?></h2>
  <h3>centro ecopsicologico de puerto rico</h3>
</div>
</section>


<section class="seccion" id="about-pages">
  <div class="content-pages">
    <div class="container" id="yellow-div" style="background-color: #e3eaa7"></div>
    <div class="mxw800p-pages">
      <h3>Reserva tu espacio </h3>
      <?php
        if ( have_posts() ) {
           while ( have_posts() ) {
               the_post(); ?>
               <div class="foto-container-1">
              <img class="foto-historia-1"src="//tocandotierra.local/wp-content/uploads/2020/03/elaine-casap-qgHGDbbSNm8-unsplash-scaled.jpg" style="width:80%; ">
              </div>
              <p><?php echo get_the_content(); ?></p>


  <?php } // end while
} // end if
?>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>
