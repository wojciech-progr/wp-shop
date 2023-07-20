<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset=<?php bloginfo('charset'); ?>>
  <?php /* Sprawdzamy, czy podstrona jest wyszukiwarką. Jeśli tak, zabraniamy indeksowania treści. */?>
  <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
  <?php endif; ?>

  <title>greenshop.com</title>

  <link rel="icon" type="image/x-icon" href="<?= GREENSHOP_THEME_URL ?>/images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/style.css" />
  <link rel="stylesheet" href="<?= GREENSHOP_THEME_URL ?>/css/styles.css" />

  <script src="<?= GREENSHOP_THEME_URL ?>/js/scripts.js"></script>
  <script src="https://kit.fontawesome.com/fc9a6b4d3f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <?php /* Informuje innych właścicieli witryn, że umieściłem link do ich treści. */?>
  <link rel="pingback" href="<?= bloginfo('pingback_url'); ?>">

  <?php /* Action hook - wykorzystują to wtyczki, dzięki funkcji nie trzeba edytować plików motywu. */?>
  <?= wp_head(); ?>

</head>

<?php /* Dopisuje klasy zaleznie od strony na której się znajdujemy, np. stylowanie elementów zależnie od tego, czy user jest zalogowany lub strona 404.  */?>

<body <?= body_class(); ?>>

  <header>

  </header>

  <nav class="header">
    <div class="container-fluid header__container">
      <div class="row">
        <div class="col-sm-12">
          <a href="<?= esc_url(home_url()) ?>">
            <img class="header__logo" alt="Logo sklepu" src="<?= GREENSHOP_THEME_URL ?>/images/lorem-ipsum-logo.jpg">
          </a>
          <ul class="header__menu">
            <li class="header__option header__option--arrow">Products</li>
            <li class="header__option header__option--arrow">Blog</li>
            <li class="header__option header__option--arrow">Contact us</li>
          </ul>
        </div>
      </div>
    </div>
  </nav>