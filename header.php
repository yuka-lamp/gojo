<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
<?php wp_head(); ?>
</head>

<body class="drawer drawer--left">
<?php wp_body_open(); ?>
<header class="header">
  <h1 class="header__wrap__logo navbar-brand d-flex align-items-center" href="<?php echo $home ?>">
    <img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="五條市地域商社のロゴ">
    <p class="d-md-none d-inline-block font-weight-bold m-0 pl-2">五條市地域商社</p>
  </h1>
  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="header__nav drawer-nav" role="navigation" style="left: -375px">
    <ul class="header__nav-inner drawer-menu pl-5 pr-5">
      <li class="header__nav-item">
        <a class="header__nav-link nav-link text-uppercase text-body" href="<?php echo $home ?>">top</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/concept/">concept</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/service/">service</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/company/">company</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/tour/">tour</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/blog/">blog</a>
      </li>
      <li class="header__nav-link header__nav__sub">
        <ul class="list-unstyled">
          <li class="header__nav__sub-item">
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/contact/">お問い合わせ</a>
          </li>
          <li class="header__nav__sub-item">
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/tarm/">利用規約</a>
          </li>
          <li class="header__nav__sub-item">
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/privacy-policy">プライバシーポリシー</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
<!-- /header -->

<main>

<?php if (is_front_page()): ?>

<section class="top__mv">
  <div class="top__mv__bg w-100">
    <div class="top__mv__content">
      <img class="top__mv__content-logo d-md-block d-none" style="width: 175px; height:auto;"src="<?php echo $wp_url ?>/dist/images/mv_logo.png" alt="五條市地域商社のロゴ" srcset="<?php echo $wp_url ?>/dist/images/mv_logo.png 1x, <?php echo $wp_url ?>/dist/images/mv_logo@2x.png 2x">
      <p class="top__mv__content-ttl text-uppercase font-weight-bold">FARMERS<br>FOREST<br>GROUP</p>
    </div>
  </div>
</section>

<section class="top__info bg-success py-4 mb-5">
  <div class="top__info__inner row">
    <div class="col-sm-4">
      <p class="top__info-ttl text-uppercase">Information</p>
    </div>
    <a class="col-sm-8 text-secondary text-decoladion_underline" href="#"><span class="top__info-day text-primary">2020.01.01</span>お知らせの内容が入ります。</a>
  </div>
</section>

<?php else:?>

<section class="submv">

</section>

<?php endif; ?>
