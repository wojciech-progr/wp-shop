<?php get_header(); ?>
<main>
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
                        <span>promoted event 1</span>
                    </div>
                    <div class="intro__promoted">
                        <span>promoted event 2</span>
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
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): ?>
                            <?php the_post(); ?>
                            <?php $event_custom_values = get_post_custom_values('ranking'); ?>
                            <article id="<?php the_ID(); ?>" <?php post_class('event'); ?>>
                                <h3>
                                    <a class="event__title" href="<?= the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <span class="event__date">15.10.2023</span>
                                <ul class="event__categories">
                                    <?php printEventsCategories($post->id, 'li'); ?>
                                </ul>
                                <?php if (!empty($event_custom_values[0])): ?>
                                    <span class="event__ranking">
                                        <?= $event_custom_values[0]; ?>
                                    </span>
                                <?php endif; ?>
                                <div>
                                    <?php the_post_thumbnail(); ?>
                                    <img class="event__image" width="" height="300pxpx" alt=""
                                        src="<?= GREENSHOP_THEME_URL ?>/images/bricks.jpeg">
                                </div>
                                <span>
                                    <?= the_excerpt(); ?>
                                </span>
                                <a class="event__button" href="<?= the_permalink(); ?>">
                                    See more
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php else: ?>
                        0 posts found
                    <?php endif; ?>
                </div>
                <?php get_sidebar('events'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>