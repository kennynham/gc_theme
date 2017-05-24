<?php
    // This is our footer template
 ?>

 <footer>
     <nav>
         <?php
             wp_nav_menu($arg = array (
                 'menu_class' => 'foot-nav',
                 'theme_location' => 'footer'
             ));
          ?>
     </nav>
     <p class="copyright">
         <small>All content on this site &copy; Kenny Nham</small>
     </p>
 </footer>
<?php wp_footer(); ?>

</body>
</html>
