    <?php

    get_header();
    ?>
    
        <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
        
        <?php the_content() ?>
    </article>
        
    <?php

    get_footer();

    ?>