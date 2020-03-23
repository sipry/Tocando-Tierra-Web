<footer style="background-color: #000">

    <div class="footer" style="margin: auto; text-align: center; padding-top: 3%; padding-bottom: 3%;">
      <i class="fab fa-pagelines" style="font-size: 50px; padding-bottom: 30px; color: rgba(199, 199, 199, 0.83);"></i>
      <p style="padding-bottom: 10px; color: rgba(199, 199, 199, 0.83);"> centroEcopsicologico@email.com</p>
     </div>

</footer>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
     function toggle(){
      var header = document.querySelector("header");
      header.classList.toggle("active");
    }
  </script>
  
<?php wp_footer(); ?>
</body>
</html>
