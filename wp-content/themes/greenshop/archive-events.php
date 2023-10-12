<?php
get_header();
?>
<div class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Upcoming music events</h1>
                <p>
                    Check the list of events divided by city and make your choice. Have fun at a concert of your
                    favorite
                    band or take part in workshops that will have a real impact on your knowledge and skills in the
                    field of music
                    in a broad sense.
                </p>
            </div>
            <div class="col-md-6">
                <div class="promotedEvent">
                    promoted event 1
                </div>
                <div class="promotedEvent">
                    promoted event 2
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2>Event list:</h2>
            <div class="col-md-12">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <article id="<?php the_ID(); ?>" <?php post_class('Event'); ?>>
                            <h3>
                                <?php the_title(); ?>
                                <?php the_post_thumbnail(); ?>
                            </h3>
                            <?php
                            printEventsCategories($post->id);
                            ?>
                            <span>
                                <?= the_excerpt(); ?>
                            </span>
                            <p>

                            </p>
                            <a href="<?= the_permalink(); ?>">
                                See more
                            </a>
                        </article>

                        <?php
                    endwhile;
                else:
                    ?>

                    Found 0 events.

                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_sidebar('events');

get_footer();
?>