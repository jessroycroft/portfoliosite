<footer id="contact">
	<!-- <div class="container"> -->
	<h2>Let's talk about <span>websites</span>!</h2>
  <div class="footer-container clearfix">
  	<div class="grid-row">
	  <div class="footer-text">
	  	<p>Specifally, working on them together, but we can talk about other things too. Give me a shout!</p>
	  	<p class="contact-info">email: <span>jess[at]jessroycroft.com</span></p>
	  	<p class="contact-info">twitter: <a href="http://twitter.com/jessroycroft">@jessroycroft</a></p>
	  </div>
	  <div class="form-container">
  	<!-- Grabs contact form -->
	  	<?php if( get_field('contact_form') ):
	       echo do_shortcode(get_field('contact_form') );
	  endif; ?>
	  </div>
	  </div>

    <p class="most-footer">Coded by Jess Roycroft 2016</p>
  </div>
<!--   </div> -->
<?php get_footer() ?>
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