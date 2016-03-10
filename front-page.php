<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
    <p><?php the_field('about_tagline') ?></p>
    <?php $aboutImage = get_field('about_image'); ?>
    <img src="<?php echo $aboutImage['sizes']['medium'] ?>" alt="">
    <p><?php the_field('about_info') ?></p>
    
      
      <?php $portfolioQuery = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'portfolio'
      )); ?>
      <?php if($portfolioQuery-> have_posts() ): ?>
        <?php while($portfolioQuery-> have_posts() ): ?>
          <?php $portfolioQuery-> the_post(); ?>
          <!-- What we want to show goes here! -->
          <h2><?php the_title() ?></h2>
          <p>
            <?php the_content() ?>
          </p>
            <?php while(has_sub_field('skills_used')): ?>
              <?php $skill = get_sub_field('skill_name'); ?>
              <ul>
                <?php echo $skill ?>
              </ul>
            <?php endwhile; ?>
            
            <a href="<?php the_field('site_link') ?>">See it live</a>
          
          <?php while(has_sub_field('image')): ?>
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
          <?php endwhile; ?>
         
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>