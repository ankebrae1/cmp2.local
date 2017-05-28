<?php get_header(); ?>

<section>
        <div class="container">
        <header class="entry-header page-header">
            <h2 class="title text-center">Nieuws</h2>
        </header><!-- .entry-header -->
            <div class="row">
              <?php
              if(have_posts()) 
              {  
              while (have_posts()) : the_post(); ?>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                         <h4 class="sub-title"><?php the_title(); ?></h4>
                         <p class="klein"><?php the_time(get_option('date_format')); ?> | <?php the_time(); ?> | <?php the_author(); ?></p>
                         <p> <?php $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 40, '... <a href="'. get_permalink() .'" class="permalinkNieuws"> <br> lees meer </a>' ); ?>
                            <p><?php echo $trimmed_content; ?></p></p>
                    </div><!--//content-->
                </div><!--//item-->
             <?php endwhile; 
              }else
            {
            echo 'Geen inhoud beschikbaar';
            }
            ?>
              <div class="nieuwsNavigatie col-md-12 col-sm-12 col-xs-12"> <p><?php posts_nav_link('  -  ','<span class="fa fa-chevron-left"></span>   Vorige pagina','Volgende pagina    <span class="fa fa-chevron-right"></span>'); ?></p>
              </div>
            </div><!--//row-->
        </div><!--//container-->
</section>

<?php get_footer(); ?>