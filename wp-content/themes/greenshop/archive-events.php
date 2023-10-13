<?php
get_header();
?>
<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="intro__mainTitle">Upcoming music events</h1>
                <p>
                    Check the list of events divided by city and make your choice. Have fun at a concert of your
                    favorite
                    band or take part in workshops that will have a real impact on your knowledge and skills in the
                    field of music
                    in a broad sense.
                </p>
            </div>
            <div class="col-md-6">
                <div class="intro__promoted">
                    promoted event 1
                </div>
                <div class="intro__promoted">
                    promoted event 2
                </div>
            </div>
        </div>
    </div>
</section>
<section class="events">
    <div class="container">
        <div class="row">
            <h2>Event list:</h2>
            <div class="col-md-8">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <article id="<?php the_ID(); ?>" <?php post_class('event'); ?>>
                            <h3>
                                <a href="<?= the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <ul class="event__categories">
                                <?php
                                printEventsCategories($post->id, 'li');
                                ?>
                            </ul>
                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>
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
            <?php
            get_sidebar('events');
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>