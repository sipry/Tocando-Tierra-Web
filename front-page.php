<?php get_header(); ?>
<body>
<!-- Banner -->
<section class="banner-index" id="home">
  <div class="text-home">
  <h2>Proyecto<br>Tocando Tierra</h2>
  <h3>centro ecopsicologico de puerto rico</h3>
 <a href="#about" style="text-decoration-line: none;">
   <i id="arrow-down" class="fas fa-chevron-down" href="#about"></i>
 </a>
</div>
</section>
<!--Termina Banner -->
<!-- quienes somos -->
<section class="sec" id="about">
 <div class="content">
   <div class="mxw800p">
     <h3>QUIENES SOMOS</h3>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <a href="#" class="btn btn-fp">Ver mas</a>
   </div>
 </div>
</section>
<!-- termina quienes somos -->
<!-- cards -->
<div class="container-body">
<div class="container" id="cards-front-page">
 <div class="card-front-page">
   <div class="imgBx">
     <img src="//tocandotierra.local/wp-content/uploads/2020/03/trent-haaland-yIsjn-IGWqc-unsplash_1-scaled.jpg">
   </div>
   <div class="contentBx">
     <div class="content">
       <h2>Quienes Somos</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
       <a href="#">Read More</a>
     </div>
   </div>
 </div>
 <div class="card-front-page">
   <div class="imgBx">
     <img src="//tocandotierra.local/wp-content/uploads/2020/03/bobby-burch-e_Q3BhySf5U-unsplash-scaled.jpg">
   </div>
   <div class="contentBx">
     <div class="content">
       <h2>Responsive Card</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
       <a href="#">Read More</a>
     </div>
   </div>
 </div>
</div>
</div>
<!-- termianan cards -->
<!-- parallax -->
<div class="pimg">
 <div class="ptext">
   <h1 class="explora-title">Explora la Naturaleza</h1>
   <p class="explora-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
   magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   <a href="#" class="btn" id="pbtn">VER MAS</a>
   </span>
 </div>
</div>
</div>
<!-- termina parallax -->
<!-- contact form -->
<?php while(have_posts()) {
    the_post(); ?>
    <div class="contactanos" id="contactanos-seccion">
      <h3>Contactanos</h3>
    </div>
    <?php the_content(); }?>
<!-- termina contact form -->
<?php get_footer(); ?>
