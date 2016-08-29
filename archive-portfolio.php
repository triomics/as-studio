<?php get_header (); ?>

<?php get_sidebar(); ?> <!-- include sidebar -->

<div class="col-md-9 portfolio-archive">

<!-- all right(from .psd template) content here -->
<div id="frontpage-carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <?php 
        $project_item = array( 
          'post_type' => 'portfolio'
        );

        $published_project = wp_count_posts('portfolio')->publish;

        $pr_query = new WP_Query( $project_item ); 
          
        if ( $pr_query->have_posts() ) :
          while ( $pr_query->have_posts() ) : $pr_query->the_post();    
      ?>  

          <div class="item">
            <ul id="front-<?php echo( basename(get_permalink()) ); ?>" class="parallax-item cta-left">
              <li class="layer" data-depth="0.20"><img src="<?php the_field('image_portfolio1'); ?>" alt= "<?php the_title(); ?>" /></li>
              <li class="layer" data-depth="0.25"><img src="<?php the_field('image_portfolio2'); ?>" alt= "<?php the_title(); ?>" /></li>
              <li class="layer" data-depth="0.30">
                <div class="cta-block">
                  <a class="btn cta" href="<?php echo get_permalink( $_post->ID ) ?>">
                    <?php _e('Подробнее', 'as-studio'); ?>
                  </a>
                </div>
              </li>
            </ul>
            <script>
              jQuery(document).ready(function($) {
                $('#front-<?php echo( basename(get_permalink()) ); ?>').parallax();
              });
            </script>
          </div>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#frontpage-carousel" role="button" data-slide="prev">
      <div class="rnd-container left" aria-hidden="true">
        <div class="rnd-arrow"></div>
      </div>
  </a>
  <a class="right carousel-control" href="#frontpage-carousel" role="button" data-slide="next">
    <div class="rnd-container right" aria-hidden="true">
      <div class="rnd-arrow"></div>
    </div>
  </a>
</div>
</div>

<?php get_footer (); ?>