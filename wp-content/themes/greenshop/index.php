<?php get_header(); ?>
<main>
    <section class="features">
        <h2 class="features__heading">Why should You choose our store?</h2>
        <ul class="features__list">
            <li class="features__feature">
                <div class="features__title">
                    Best prices
                </div>
                <p class="features__description">
                    <i>
                        We never overprice our products so you can expand your collection of musical instruments
                        at
                        a reasonable price
                    </i>
                </p>
            </li>
            <li class="features__feature">
                <div class="features__title">
                    Enthusiasts by nature
                </div>
                <p class="features__description">
                    <i>
                        The specialists working in our store are a team directly related to the world of music
                    </i>
                </p>
            </li>
            <li class="features__feature">
                <div class="features__title">
                    Years of service
                </div>
                <p class="features__description">
                    <i>
                        Our brand has been built over the years, which resulted in the trust of hundreds of
                        customers.
                    </i>
                </p>
            </li>
            <li class="features__feature">
                <div class="features__title">
                    Up-to-date blog
                </div>
                <p class="features__description">
                    <i>
                        Instantly learn about the most interesting news from the world of music or deepen your
                        knowledge
                        of this subject.
                    </i>
                </p>
            </li>
        </ul>
    </section>
    <section class="promoted">
        <ul class="promoted__list">
            <li class="promoted__title">Recent articles</li>
            <li class="promoted__option"><a href="#" class="promoted__link">
                    New guitar type becomes best choice for young musicians</a>
            </li>
            <li class="promoted__option"><a href="#" class="promoted__link">
                    Drum technology is evolving rapidly after new research</a></li>
            <li class="promoted__option promoted__option--last"><a href="#" class="promoted__link">
                    See all articles</a></li>
        </ul>
        <ul class="promoted__list">
            <li class="promoted__title">Upcoming events</li>
            <li class="promoted__option">
                <span class="promoted__date">01.08.2023</span>
                <a href="#" class="promoted__link">
                    Black Octopus - Vienna
                    <img width="" height="" class="promoted__flag" alt="Austrian flag"
                        src="<?= GREENSHOP_THEME_URL ?>/images/austria-flag.png">
                </a>
            </li>
            <li class="promoted__option">

                <span class="promoted__date">10.08.2023</span>
                <a href="#" class="promoted__link">
                    Lost Sailor - Warsaw
                    <img width="" height="" class="promoted__flag" alt="Austrian flag"
                        src="<?= GREENSHOP_THEME_URL ?>/images/poland-flag.png">
                </a>
                <a href="#" class="promoted__link">
                    In Desert We Trust - Berdlin
                    <img width="" height="" class="promoted__flag" alt="Austrian flag"
                        src="<?= GREENSHOP_THEME_URL ?>/images/germany-flag.png">
                </a>
            </li>
            <li class="promoted__option">
                <span class="promoted__date">15.08.2023</span>
                <a href="#" class="promoted__link">
                    Porcupine - Berdlin
                    <img width="" height="" class="promoted__flag" alt="Austrian flag"
                        src="<?= GREENSHOP_THEME_URL ?>/images/germany-flag.png">
                </a>
            </li>
        </ul>
        <ul class="promoted__list">
            <li class="promoted__title promoted__title--hot">
                Hot offers
            </li>
            <li class="promoted__option">
                <a href="#" class="promoted__link">
                    Jackson JS12 DKA Dinky AHFBBLK
                </a>
            </li>
        </ul>
        <ul class="promoted__list">
            <li class="promoted__title">
                Famous fights
            </li>
            <li class="promoted__option">
                <a href="#" class="promoted__link">
                    Joe Satriani vs Steve Vai
                </a>
            </li>
        </ul>
    </section>
</main>

<?php get_footer(); ?>