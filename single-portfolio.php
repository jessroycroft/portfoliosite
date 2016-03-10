<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article class="portfolio-item">
            <h2>
              <?php the_title() ?>
            </h2>
            <p>
              <?php the_content() ?>
            </p>
            <ul>
              <?php the_field('skills_used') ?>
            </ul>
            <a href=" <?php the_field('site_link') ?> ">See it live</a>
            <div class="image-showcase">
              <?php while(has_sub_fields('images')): ?>
                <?php $image = get_sub_field('image'); ?>
              
            </div>
          </article>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>