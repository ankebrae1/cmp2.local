<?php get_header(); ?>

<section>
        <div class="container">
        <header class="entry-header page-header">
            <h2 class="title text-center">Voordelen</h2>
        </header><!-- .entry-header -->
            <div class="row">
            <?php 
            if(have_posts()) 
            {
            while (have_posts()) : the_post(); ?>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                         <h4 class="sub-title text-center"><?php the_title(); ?></h4>
                         <p class="klein"><?php the_content(); ?></p>
                    </div><!--//content-->
                </div><!--//item-->
             <?php 
             endwhile; 
             }
            else
            {
            echo 'Geen inhoud beschikbaar';
            }
             ?>
            </div>
        </div>
</section>
   
<?php get_footer(); ?>