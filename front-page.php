<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
    <section class="tagline">
      <p><?php the_field('about_tagline') ?></p>
    </section>
    
    <section class="skills">
      <div class="grid-row">
        <div class="grid-cell-text grid-cell">
          <h2>I make cool things.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque blanditiis quia nihil, tempore vitae inventore natus, consectetur tempora architecto. Laborum nisi natus iure, reprehenderit facilis? Dolores nulla, mollitia doloremque saepe.</p>
        </div>
        <div class="grid-cell-image">
          <img src="http://unsplash.it/500/500" alt="">
        </div>
      </div>
      <div class="grid-row">
        <div class="grid-cell-image grid-cell">
          <ul class="main-skills-list">
          <?php while(has_sub_field('skill_list')): ?>
            <?php $mainSkillName = get_sub_field('skill_name'); ?>
            <?php $mainSkillIcon = get_sub_field('skill_icon'); ?>
            <li>
              <?php echo $mainSkillIcon ?>
              <?php echo $mainSkillName ?>
            </li>
          <?php endwhile; ?>
          </ul>
        </div>
        <div class="grid-cell-text grid-cell">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
      </div>
      
    </section>

  <!-- Portfolio Section -->
    <section class="portfolio">
        <?php $portfolioQuery = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'portfolio'
        )); ?>
        <?php if($portfolioQuery-> have_posts() ): ?>
          <?php while($portfolioQuery-> have_posts() ): ?>
              
              <?php $portfolioQuery-> the_post(); ?>
              <!-- What we want to show goes here! -->
              <div class="portfolio-item">
                <div class="portfolio-text grid-cell">
                  <h2><?php the_title() ?></h2>
                  <p>
                    <?php the_content() ?>
                  </p>
                      <ul class="skill-list">
                        <?php while(has_sub_field('skills_used')): ?>
                        <?php $skill = get_sub_field('skill_name'); ?>
                        <?php echo $skill ?>
                        <?php endwhile; ?>
                      </ul>
                    
                    <!-- Button to see site live -->
                
                  <a href="<?php the_field('site_link') ?>" class="link-button">See it live</a>
                </div>
                
                <!-- Mockups of website on devices -->
                <div class="portfolio-image grid-cell">
                  <?php while(has_sub_field('image')): ?>
                  <?php $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                  <?php endwhile; ?> <!-- End image loop -->
                </div>
              </div>
       
             
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        
      </section>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      <section class="about">
        <h3>About</h3>
        <?php $aboutImage = get_field('about_image'); ?>
        <img src="<?php echo $aboutImage['sizes']['large'] ?>" alt="">

        <p><?php the_field('about_info') ?></p>
      </section>
    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>