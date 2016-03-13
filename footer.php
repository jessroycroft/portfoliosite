<footer>
	<!-- <div class="container"> -->
	<h2>Let's Talk <span>Websites</span></h2>
  <div class="footer-container clearfix">
	  <div class="footer-text">
	  	<p>I'd love to chat about how we can work together. Drop me a line and we can do that!</p>
	  	<p class="contact-info">email: <span>jess[at]jessroycroft.com</span></p>
	  	<p class="contact-info">twitter: <span>@jessroycroft</span></p>
	  </div>
  	<!-- Grabs contact form -->
	  <?php if( get_field('contact_form') ):
	       echo do_shortcode(get_field('contact_form') );
	  endif; ?>
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'social'
  )); ?>
    <p>Coded by Jess Roycroft 2016</p>
  </div>
<!--   </div> -->
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php wp_footer(); ?>
</body>
</html>