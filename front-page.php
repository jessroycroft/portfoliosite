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
          <h3 class="emphasis-heading">I make <span>cool</span> things.</h3>
          <p>And I make them on the internet!</p> 
          <p>I like to build websites that are fun, beautiful, and responsive, so that they look good whether you're being a productive human on a laptop or dropping your phone on your face when you're nighttime scrolling.</p>
        </div>
        <div class="grid-cell-image">
          <!-- <img src="<?php bloginfo('template_directory'); ?>/images/triangle-background.jpg" alt=""> -->
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
              <p class='skill-icon-name'><?php echo $mainSkillName ?></p>
            </li>
          <?php endwhile; ?>
          </ul>
        </div>
        <div class="grid-cell-text grid-cell">
          <h3 class="skills-section-title">How I get things <span>done</span>.</h3>
          <p>This is a little about the skills I have, the tools I use, and how I use them.</p>

          <ul class="skills-details">
            <li>
              <p class="skill-heading">Evolution</p>
              <p>Web development is an ever-changing industry, and that's what makes it exciting. Keeping up to date with modern best practices and new tools and technologies is an ongoing process, and one I'm committed to.</p>
            </li>
            <li>
              <p class="skill-heading">Collaboration</p>
              <p>We are all standing on the shoulders of giants, and I believe that collaboration and open-sourcing help us combine and develop skills far beyond what we could achieve alone.</p>
            </li>
            <li>
              <p class="skill-heading">Efficient Workflow</p>
              <p>I use tools like Gulp, Sass, and Git on the command line to automate workflow and maximize efficiency, so that I can spend more time coding the things I love.</p>
            </li>
            
            <li>
              <p class="skill-heading">Responsive Design</p>
              <p>Every site has to look great from mobile to desktop - and everything in between.</p>
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