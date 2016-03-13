<?php get_header();  ?>

<div class="main">
 <!--  <div class="container"> -->

    <div class="content">
    <section class="tagline">
      <p><?php the_field('about_tagline') ?></p>
    </section>
    
    <section class="skills">
      <div class="grid-row grid-row-1">
        <div class="grid-cell-text grid-cell">
          <h2>I make <span>cool</span> things.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque blanditiis quia nihil, tempore vitae inventore natus, consectetur tempora architecto. Laborum nisi natus iure, reprehenderit facilis? Dolores nulla, mollitia doloremque saepe.</p>
        </div>
        <div class="grid-cell-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/triangle-background.jpg" alt="">
        </div>
      </div>
      <div class="grid-row grid-row-2">
        <div class="grid-cell-image grid-cell">
          <ul class="main-skills-list">
          <?php while(has_sub_field('skill_list')): ?>
            <?php $mainSkillName = get_sub_field('skill_name'); ?>
            <?php $mainSkillIcon = get_sub_field('skill_icon'); ?>
            <li class="wow fadeInUp">
              <?php echo $mainSkillIcon ?>
              <?php echo $mainSkillName ?>
            </li>
          <?php endwhile; ?>
          </ul>
        </div>
        <div class="grid-cell-text grid-cell">
          <h3 class="skills-section-title">A few things that describe me and my <span>work</span> further.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

          <ul class="skills-details">
            <li>
              <p class="skill-heading">A couple things</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, dignissimos.</p>
            </li>
            <li>
              <p class="skill-heading">And more things as well.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, molestiae.</p>
            </li>
            <li>
              <p class="skill-heading">Things and Things</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, dignissimos.</p>
            </li>
            <li>
              <p class="skill-heading">Skills and Details</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, molestiae.</p>
            </li>
          </ul>
        </div>
      </div>
      
    </section>

  <!-- Portfolio Section -->
    <section class="portfolio">
      <div class="container">
      <h2>Work</h2>
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
                  <h3><?php the_title() ?></h3>
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
                
                  <a href="<?php the_field('site_link') ?>" class="link-button">See it live</a>/<a href="#">Read more</a>
                </div>
                
                <!-- Mockups of website on devices -->
                <div class="portfolio-image">
                  <?php while(has_sub_field('image')): ?>
                  <?php $image = get_sub_field('image'); ?>
                  <img class="wow fadeInUp" src="<?php echo $image['sizes']['large'] ?>" alt="">
                  <?php endwhile; ?> <!-- End image loop -->
                </div>
              </div>
       
             
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </section>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      <section class="about">
        <div class="container">
          <h2>About</h2>
          <div class="about-wrapper">
            <?php $aboutImage = get_field('about_image'); ?>
            <img src="<?php echo $aboutImage['sizes']['large'] ?>" alt="">
            <div class="about-text">
              <p><?php the_field('about_info') ?></p>
            </div>
          </div>
        </div>
      </section>
    </div> <!-- /.content -->


  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>