<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post();
?>

<article>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    
    <p><?php echo get_the_excerpt()?></p>
    <a href="<?php the_permalink() ?>">Read more</a>
</article>
    
<?php    endwhile;

else:
?>
    <p><?php esc_html_e('No content found');?></p>

<?php
endif;

get_footer();

?>