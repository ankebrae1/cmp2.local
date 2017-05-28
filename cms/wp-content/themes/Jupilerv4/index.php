<?php get_header(); ?>


<section>
    <div id="containerBanner">
            <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" id="bannerImage">
    </div>
        <div class="container">
        <header class="entry-header page-header">
            
            <h2 class="title text-center">recent nieuws</h2>
        </header><!-- .entry-header -->
            <div class="row">
            <?php 

        $args = array(
        'post_type' => 'nieuws',
        'posts_per_page' => 3,
        'orderby' => 'post_date'
        );

        $the_query = new WP_Query( $args );
    
             while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                         <h4 class="sub-title"><?php the_title(); ?></h4>
                         <p class="klein"><?php the_time(get_option('date_format')); ?> | <?php the_time(); ?> | <?php the_author(); ?></p>
                         <p> <?php $content = get_the_content();
  $trimmed_content = wp_trim_words( $content, 40, '... <a href="'. get_permalink() .'" class="permalinkNieuws"> <br> lees meer </a>' ); ?>
  <p><?php echo $trimmed_content; ?></p></p>
                    </div><!--//content-->
                </div><!--//item-->
             <?php ; endwhile; ?>
            </div>
        </div>
</section>





<?php get_footer(); ?>