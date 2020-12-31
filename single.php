<?php

get_header( 'post' );

if (have_posts()):
    while (have_posts()) : the_post();
?>

<div class="post-container">
    <?php the_post_thumbnail() ?>

    <h1><?php the_title()?></h1>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    
    <?php the_content()?>
</div>

<?php    endwhile;

else:
?>
    <p><?php esc_html_e('No content found');?></p>

<?php
endif;

get_footer();

?>