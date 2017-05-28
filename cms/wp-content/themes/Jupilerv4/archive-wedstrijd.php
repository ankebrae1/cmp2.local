<?php get_header(); ?>

<section>
        <div class="container">
        <header class="entry-header page-header">
            <h2 class="title text-center">Wedstrijd</h2>
        </header><!-- .entry-header -->
        <h3>De strijd om een reis naar Schotland</h3>
        <p>Wil jij graag samen met 3 vrienden op trektocht gaan naar Schotland? Dan is dit de uitgelezen kans! <br> <strong> Maak een filmpje met als thema: WAT WIL JIJ NOG KUNNEN MET JUPILER 0.0 ?</strong>
        <br>Stuur het filmpje naar ons en misschien ben jij wel de gelukkige. Hieronder staan de reeds deelgenomen kandidaten.</p>
            <div class="row">
            <?php 
            if(have_posts()) 
            { 
            while (have_posts()) : the_post(); ?>
                <div class="item col-md-6 col-xs-12">
                    <div class="content">
                         <h4 class="sub-title"><?php the_title(); ?></h4>
                         <?php the_content(); ?>
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