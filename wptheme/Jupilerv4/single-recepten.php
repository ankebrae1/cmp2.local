<?php get_header(); ?>

<section>
        <div class="container">
            <div class="row">
                <div class="item col-sm-12 col-md-8 col-xs-12">
                    <div class="content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php while (have_posts()) : the_post(); ?>
                         <img class="col-md-6 col-sm-12" src="<?php echo get_post_meta(get_the_ID(), '_ingredienten', true ); ?>">
                         <p class="col-sm-12 col-md-6"> <?php the_content(); ?>
                    </div><!--//content-->
                </div><!--//item-->
             <?php endwhile; ?>
             <div class="comments-template col-sm-12 col-md-8 col-xs-12">
                 <h1 id="titelComments">REACTIES</h1>
                <?php comments_template(); ?>
                </div>
            </div>
        </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>