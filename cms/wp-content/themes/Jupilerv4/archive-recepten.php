<?php get_header(); ?>

<section>
        <div class="container">
        <header class="entry-header page-header">
            <h2 class="title text-center">Recepten</h2>
        </header><!-- .entry-header -->
            <div class="row">
                        <?php 
                        if(have_posts()) 
                        { 
                        while (have_posts()) : the_post(); ?>

                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h4 class="sub-title"><?php the_title(); ?></h4>
                                    <img class="imgRecept" src="<?php echo get_post_meta(get_the_ID(), '_receptfoto', true ); ?>">
                                    <p> <?php $content = get_the_content(); 
            $trimmed_content = wp_trim_words( $content, 0, '<a href="'. get_permalink() .'" class="permalinkNieuws"> <br> Bekijk recept </a>' ); ?>
            <p><?php echo $trimmed_content; ?></p></p>
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
                    </div><!--//content-->
                </div><!--//item-->
            </div>
        </div>
</section>

<?php get_footer(); ?>