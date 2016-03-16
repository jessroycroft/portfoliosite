<?php get_header();  ?>

 <!--  <div class="container"> -->

    <section class="skills">
      <div class="grid-row grid-row-1">
        <div class="grid-cell-text grid-cell first-blurb">
          <h3 class="emphasis-heading">I like to make <span>cool</span> things!</h3>
          <p>I love putting the pieces of a project together and watching as a blank screen turns into something beautiful and fun. Searching out new ways to make that happen is exciting - I like to be on the lookout to learn new skills and techniques to make sites that are clean, clear, and fully responsive, so they look good when you're being a productive human on a laptop or dropping your phone on your face in the middle of the night.</p>
        </div>
        <div class="grid-cell-image">
          <!-- <img src="<?php bloginfo('template_directory'); ?>/images/triangle-background.jpg" alt=""> -->
        </div>
      </div>
      <div class="grid-row grid-row-2">
        <div class="grid-cell-image grid-cell skill-cell">
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
        <div class="grid-cell-text grid-cell text-cell">
          <div class="section-title">
            <h3 class="skills-section-title">This is what I <span>make</span> them with.</h3>
          </div>
          <div class="section-text">
            <p>HTML5, CSS3, and jQuery are my jam, but I'm familiar with Javascript fundamentals and Wordpress theme development, and am excited to learn more. I use Git on the command line for collaboration and version control, and streamline my workflow with Sass and Gulp so that I can spend more time coding the things I love.</p>
          </div>
        </div>
      </div>
      
    </section>

  <!-- Portfolio Section -->
    <section class="portfolio" id="work">
      <div class="container">
      <h2>I made <span>these</span>:</h2>
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
                
                  <button><a href="<?php the_field('site_link') ?>" class="link-button">See it live</a></button>
                </div>
                
                <!-- Mockups of website on devices -->
                <div class="portfolio-image">
                  <?php while(has_sub_field('image')): ?>
                  <?php $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['sizes']['large'] ?>" alt="">
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
      <section class="about" id="about">
        <div class="container">
          <h2>About <span>me</span>.</h2>
          <div class="grid-row about-grid-row">
          <div class="grid-cell-image grid-cell about-image-wrapper">
            <?php $aboutImage = get_field('about_image'); ?>
            <img src="<?php echo $aboutImage['sizes']['large'] ?>" alt="">
          </div>
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