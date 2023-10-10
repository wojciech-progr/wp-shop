<?php
get_header();
?>

Lorem Ipsum before posts loop

<?php
if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div id="<?php the_ID(); ?>" <?php post_class('one-post'); ?>>
            <?php the_title(); ?>
        </div>

        <?php
    endwhile;
else:
    ?>

    Nie ma postów

    <?php
endif;
?>

Lorem Ipsum after posts loop

<?php
get_sidebar('events');

get_footer();
?>