<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset=<?php bloginfo('charset'); ?>>
  <?php /* If this is search site do not allow indexing (for example google) */?>
  <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
  <?php endif; ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?= get_bloginfo('name') ?>
  </title>

  <meta name="description" content="example description of site">

  <link rel="icon" type="image/x-icon" href="<?= GREENSHOP_THEME_URL ?>/images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/style.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/styles.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/styles-js.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/mobile.css" />

  <script src="<?= GREENSHOP_THEME_URL ?>/js/functions.js"></script>
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

  <nav class="navbar" role="navigation" aria-label="main website navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="navbar__logo" href="<?= esc_url(home_url()) ?>">
            <img class="navbar__img" width="" height="" alt="Shop logo" src="<?= GREENSHOP_THEME_URL ?>/images/logo.png">
          </a>
          <ul class="navbar__menu" aria-label="main menu">
            <li onclick="showSubElement(this)" class="navbar__option navbar__option--guitar">
              <strong>Products</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenuOption">Guitars</li>
                <li class="navbar__submenuOption">Drums</li>
                <li class="navbar__submenuOption">Keys</li>
                <li class="navbar__submenuOption">Strings</li>
                <li class="navbar__submenuOption">All products</li>
                <li class="navbar__submenuOption navbar__submenu--deal">Deal of the day</li>
              </ul>
            </li>
            <li onclick="showSubElement(this)" class="navbar__option navbar__option--events">
              <strong>Events</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenuOption">Germany <img width="" height="" class="navbar__submenu--flag" alt="German flag"
                    src="<?= GREENSHOP_THEME_URL ?>/images/germany-flag.png"></li>
                <li class="navbar__submenuOption">Poland <img width="" height="" class="navbar__submenu--flag" alt="Polish flag"
                    src="<?= GREENSHOP_THEME_URL ?>/images/poland-flag.png"></li>
                <li class="navbar__submenuOption">Austria <img width="" height="" class="navbar__submenu--flag" alt="Austrian flag"
                    src="<?= GREENSHOP_THEME_URL ?>/images/austria-flag.png"></li>
                <li class="navbar__submenuOption">Whole world</li>
              </ul>
            </li>
            <li onclick="showSubElement(this)" class="navbar__option navbar__option--blog">
              <strong>Blog</strong>
              <ul class="navbar__submenu">
                <li class="navbar__submenuOption">Music theory</li>
                <li class="navbar__submenuOption">Sound engineering</li>
              </ul>
            </li>
          </ul>
          <ol class="breadcrumbs" aria-label="breadcrumbs">
            <li class="breadcrumbs__piece" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <a class="breadcrumbs__piece--link" href="#" itemprop="url">
                <span itemprop="title">Homepage</span><span class="breadcrumbs__separator">></span>
              </a>
            </li>
            <li class="breadcrumbs__piece" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <a class="breadcrumbs__piece--link" href="#" itemprop="url">
                <span itemprop="title">Products</span><span class="breadcrumbs__separator">></span>
              </a>
            </li>
            <li class="breadcrumbs__piece" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <a class="breadcrumbs__piece--link" href="#" itemprop="url">
                <span itemprop="title">Guitars</span><span class="breadcrumbs__separator">></span>
              </a>
            </li>
            <li class="breadcrumbs__piece">
              <span class="breadcrumbs__piece--current">Jackson JS12 DKA Dinky AH FB
              </span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </nav>