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
  <h1 class="header__logo navbar-brand d-flex align-items-center" href="<?php echo $home ?>">
    <img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="五條市地域商社のロゴ">
    <p class="d-md-none d-inline-block font-weight-bold m-0 pl-2">五條市地域商社</p>
  </h1>
  <!-- <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle mainvisual</span>
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
  </nav> -->
</header>
<div class="header__booking bg-primary">
  <a class="header__booking-inner" href="#">
    <img class="mr-2" style="width: 17.4px; height: 17.4px;"src="<?php echo $wp_url ?>/dist/images/icon_booking.svg" alt="予約アイコン">
    <p class="header__booking-text text-white font-weight-bold m-0 d-inlineß">BOOKING</p>
  </a>
</div>
<!-- /header -->

<main>

<?php if (is_front_page()): ?>

<section class="top__mv">
    <div class="top__mv__bg">
      <div class="top__mv__bg-item d-block num-01"></div>
      <div class="top__mv__bg-item d-block num-02"></div>
      <div class="top__mv__bg-item d-block num-03"></div>
    </div>
    <div class="top__mv__content">
      <img class="top__mv__content-logo d-md-block d-none" style="width: 175px; height:auto;"src="<?php echo $wp_url ?>/dist/images/mv_logo.png" alt="五條市地域商社のロゴ" srcset="<?php echo $wp_url ?>/dist/images/mv_logo.png 1x, <?php echo $wp_url ?>/dist/images/mv_logo@2x.png 2x">
      <p class="top__mv__content-ttl text-uppercase font-weight-bold">GOJO Local<br>Trading <br>Company</p>
    </div>
</section>

<section class="top__info bg-success py-4 mb-5">
  <?php
    $args = [
        'posts_per_page' => 6,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'ASC',
    ];
    $my_posts = get_posts($args);
    foreach ($my_posts as $post):
    setup_postdata($post);
    $id = get_the_ID();
    $ttl = get_the_title();
    $permalink = get_the_permalink();
    $date = get_the_date();
    ?>
  <div class="top__info__inner row">
    <div class="col-sm-4">
      <p class="top__info-ttl text-uppercase">Information</p>
    </div>
    <p class="col-sm-8 text-secondary text-decoladion_underline m-0" href="<?php echo $permalink ?>"><span class="top__info-day text-primary"><?php echo $date ?></span><?php echo $ttl ?></p>
    <!-- <a class="col-sm-8 text-secondary text-decoladion_underline" href="<?php echo $permalink ?>"><span class="top__info-day text-primary"><?php echo $date ?></span><?php echo $ttl ?></a> -->
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</section>

<?php else:?>

<section class="submv">

</section>

<?php endif; ?>
