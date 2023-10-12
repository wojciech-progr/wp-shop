<?php
get_header();
?>
<section class="events">
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

                        <article id="<?php the_ID(); ?>" <?php post_class('event'); ?>>
                            <h3>
                                <a href="<?= the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <?php the_post_thumbnail(); ?>
                            </h3>
                            <ul class="event__categories">
                                <?php
                                printEventsCategories($post->id, 'li');
                                ?>
                            </ul>
                            <span>
                                <?= the_excerpt(); ?>
                            </span>
                            <p>

                            </p>
                            <a class="event__button" href="<?= the_permalink(); ?>">
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
</section>
<?php
get_sidebar('events');

get_footer();
?>