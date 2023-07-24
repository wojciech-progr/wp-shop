<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset=<?php bloginfo('charset'); ?>>
  <?php /* If this is search site do not allow indexing (for example google) */?>
  <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
  <?php endif; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>example.pl</title>

  <link rel="icon" type="image/x-icon" href="<?= GREENSHOP_THEME_URL ?>/images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/style.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/styles.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/mobile.css" />

  <script src="<?= GREENSHOP_THEME_URL ?>/js/scripts.js"></script>
  <script src="https://kit.fontawesome.com/fc9a6b4d3f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <?php /* Informs another websites that i am linking to them */?>
  <link rel="pingback" href="<?= bloginfo('pingback_url'); ?>">

  <?php /* Action hook - Plugins uses that, so they dont have to edit theme files directly. */?>
  <?= wp_head(); ?>

</head>

<?php /* Adds classes depending on the site, for example 404 or if user is logged in  */?>

<body <?= body_class(); ?>>

  <nav class="navbar">
    <div class="container">
      <div class="row">
        <div>
          <a class="navbar__logo" href="<?= esc_url(home_url()) ?>">
            <img class="navbar__logo--img" alt="Logo sklepu"
              src="<?= GREENSHOP_THEME_URL ?>/images/lorem-ipsum-logo.jpg">
          </a>
          <ul class="navbar__menu">
            <li onclick="showSubmenu(this)" class="navbar__option navbar__option--guitar">
              <strong>Products</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenu--option">Guitars</li>
                <li class="navbar__submenu--option">Drums</li>
                <li class="navbar__submenu--option">Keys</li>
                <li class="navbar__submenu--option">Strings</li>
                <li class="navbar__submenu--option">All products</li>
                <li class="navbar__submenu--option navbar__submenu--deal">Deal of the day</li>
              </ul>
            </li>
            <li onclick="showSubmenu(this)" class="navbar__option navbar__option--events">
              <strong>Events</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenu--option">Germany</li>
                <li class="navbar__submenu--option">Poland</li>
                <li class="navbar__submenu--option">Austria</li>
                <li class="navbar__submenu--option">Whole world</li>
              </ul>
            </li>
            <li onclick="showSubmenu(this)" class="navbar__option navbar__option--blog">
              <strong>Blog</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenu--option">Music theory</li>
                <li class="navbar__submenu--option">Sound engineering</li>
              </ul>
            </li>
            <li onclick="showSubmenu(this)" class="navbar__option">
              <strong>Musician fights</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenu--option">Guitarists</li>
                <li class="navbar__submenu--option">Drummers</li>
                <li class="navbar__submenu--option">Bands</li>
                <li class="navbar__submenu--option">All fights</li>
              </ul>
            </li>
            <li onclick="showSubmenu(this)" class="navbar__option">
              <strong>About us</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenu--option">Contact us</li>
                <li class="navbar__submenu--option">Terms of usage</li>
                <li class="navbar__submenu--option">Privacy policy</li>
              </ul>
            </li>
          </ul>
          <ul class="header__list">
            <li class="header__list--title">Latest blog entries</li>
            <li class="header__list--option">New guitar type becomes best choice for young musicians</li>
            <li class="header__list--option">Drum technology is evolving rapidly after new research</li>
          </ul>
          <ul class="header__list">
            <li class="header__list--title">Upcoming events</li>
            <li class="header__list--option">Black Octopus - Vienna</li>
            <li class="header__list--option">Lost Sailor - Warsaw</li>
            <li class="header__list--option">Porcupine - Berlin</li>
          </ul>
          <ul class="header__list">
            <li class="header__list--title">Hot offers %</li>
            <li class="header__list--option">Jackson JS12 DKA Dinky AH FB BLK</li>
          </ul>
        </div>
      </div>
    </div>
  </nav>