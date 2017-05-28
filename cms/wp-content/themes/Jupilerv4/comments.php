<?php

if ( is_user_logged_in() ) {

// Als aanmelden noodzakelijk is...
if ( post_password_required() ) {
    return;
}

if ( have_comments() ) :
    //Is er commentaar aanwezig... dan doen we het volgende...
?>
    <h2>
        <?php get_the_title(); ?>
    </h2>
    <?php the_comments_navigation(); ?>

    <ol>
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 42,
            'max_depth' => 4
        ) );
        ?>
    </ol>

    <?php the_comments_navigation(); ?>

<?php endif; ?>

<?php

if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
    <p class="no-comments"><?php _e( 'Niet mogelijk om commentaar te geven.', 'mytheme' ); ?></p>
<?php endif; ?>

<?php
comment_form( array(
    'title_reply_before' => '<h2>',
    'title_reply_after'  => '</h2>',
) );

        } else {
            ?> 
            <p>Je bent niet ingelogd. <a class="commentsLink" href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a> om de reacties te zien of een reactie te plaatsen.</p>
        <?php } ?>