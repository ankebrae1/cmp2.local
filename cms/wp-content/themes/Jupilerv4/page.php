<?php get_header(); ?>

<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
<div class="container">
	<header class="entry-header page-header">
		<h2 class="title text-center"><?php the_title(); ?></h2>
	</header>
    
    <!-- CONTENT -->
            <div class="col-xs-12">
           <?php get_template_part('partials/content'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>