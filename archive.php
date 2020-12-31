<?php

get_header();

if (is_author()):

?>

<h2 style="margin-top: 1em;">Articles by <?php the_post(); echo get_the_author(); rewind_posts(); ?></h2>

<?php

endif;

if (have_posts()):
    while (have_posts()) : the_post();
?>

<article>
    <?php the_post_thumbnail() ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
    
    <p><?php echo get_the_excerpt()?></p>
    <a href="<?php the_permalink() ?>">Read more</a>
</article>
    
<?php

endwhile;

else:
?>
    <p><?php esc_html_e('No content found');?></p>

<?php
endif;

get_footer();

?>