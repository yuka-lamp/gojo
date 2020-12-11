<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
  <nav class="header__wrap navbar navbar-light bg-light">
    <h1 class="header__wrap__logo navbar-brand" href="<?php echo $home ?>">
      <img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="五條市地域商社のロゴ">
    </h1>
    <button class="header__wrap__hum navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="header__nav collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="header__nav-inner navbar-nav">
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-body" href="<?php echo $home ?>">top</a>
        </li>
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-primary" href="<?php echo $home ?>/concept/">concept</a>
        </li>
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-primary" href="<?php echo $home ?>/service/">service</a>
        </li>
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-primary" href="<?php echo $home ?>/company/">company</a>
        </li>
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-primary" href="<?php echo $home ?>/tour/">tour</a>
        </li>
        <li class="header__nav-item nav-item">
          <a class="header__nav-link nav-link text-uppercase text-primary" href="<?php echo $home ?>/blog/">blog</a>
        </li>
        <li class="header__nav-link nav-item">
          <ul class="list-unstyled">
            <li class="header__nav__sub-item nav-item">
              <a class="header__nav__sub-link nav-link small text-gray" href="<?php echo $home ?>/contact/">お問い合わせ</a>
            </li>
            <li class="header__nav-item nav-item">
              <a class="header__nav__sub-link nav-link small text-gray" href="<?php echo $home ?>/tarm/">利用規約</a>
            </li>
            <li class="header__nav-item nav-item">
              <a class="header__nav__sub-link nav-link small text-gray" href="<?php echo $home ?>/privacy-policy">プライバシーポリシー</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- /header -->

<main>

<?php if (is_front_page()): ?>

<section class="mv">
  <div class="mv__content">
    <img src="<?php echo $wp_url ?>/dist/images/mv_logo.png" alt="五條市地域商社のロゴ" srcset="<?php echo $wp_url ?>/dist/images/mv_logo.png 1x, <?php echo $wp_url ?>/dist/images/mv_logo@2x.png 2x">
    <p class="mv__content-ttl text-uppercase font-weight-bold">FARMERS<br>FOREST<br>GROUP</p>
  </div>
</section>

<section class="info bg-success py-4">
  <div class="row">
    <div class="col-sm-4">
      <p class="text-uppercase font-weight-bold m-0">Information</p>
    </div>
    <a class="col-sm-8 text-secondary text-decoladion_underline" href="#"><span class="mr-5">2020.01.01</span>お知らせの内容が入ります。</a>
  </div>
</section>

<?php else:?>

<section class="submv">

</section>

<?php endif; ?>
