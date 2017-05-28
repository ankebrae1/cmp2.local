<?php get_header(); ?>

<section>
        <div class="container">
            <div class="row">
                <div class="item col-sm-12 col-md-8 col-xs-12">
                    <div class="content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php while (have_posts()) : the_post(); ?>
                         <p class="klein"><?php the_date(); ?> | <?php the_author(); ?></p>
                         <p> <?php the_content(); ?>
                    </div><!--//content-->
                </div><!--//item-->
             <?php endwhile; ?>
             <div class="comments-template col-sm-12 col-md-8 col-xs-12">
                 <h1 id="titelComments">REACTIES</h1>
                <?php comments_template(); ?>
            </div>
            </div><!--//row-->
        </div><!--//container-->
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>