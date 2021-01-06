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

<!-- ▼ ヘッダー -->
<header class="header">
  <h1 class="header__logo navbar-brand d-flex align-items-center">
    <a href="<?php echo $home ?>">
      <img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="五條市地域商社株式会社のロゴ">
      <p class="d-lg-none d-inline-block font-weight-bold m-0 pl-2">五條市地域商社株式会社</p>
    </a>
  </h1>
  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle mainvisual</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <!-- ▼ メニュー -->
  <nav class="header__nav drawer-nav" role="navigation" style="left: -375px">
    <ul class="header__nav-inner drawer-menu pl-5 pr-5">
      <li class="header__nav-item">
        <a class="header__nav-link nav-link text-uppercase text-body" href="<?php echo $home ?>">top</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/concept/">concept</a>
      </li>
      <li class="header__nav-item">
        <a class="header__nav-link nav-link drawer-menu-item text-uppercase text-primary" href="<?php echo $home ?>/business/">business</a>
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
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/news/">お知らせ</a>
          </li>
          <li class="header__nav__sub-item">
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/contact/">お問い合わせ</a>
          </li>
          <li class="header__nav__sub-item">
            <a class="header__nav__sub-link nav-link drawer-menu-item small text-gray" href="<?php echo $home ?>/privacy-policy">プライバシーポリシー</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- ▲ メニュー -->
</header>
<!-- ▲ ヘッダー -->

<!-- ▼ 予約ボタン -->
<div class="header__booking bg-primary">
  <a class="header__booking-inner" href="#">
    <img class="mr-2" style="width: 17.4px; height: 17.4px;"src="<?php echo $wp_url ?>/dist/images/icon_booking.svg" alt="予約アイコン">
    <p class="header__booking-text text-white font-weight-bold m-0 d-inlineß">BOOKING</p>
  </a>
</div>
<!-- ▲ 予約ボタン-->

<main>

<?php if (is_front_page()): ?>

<!-- ▼ メインビジュアル - トップページ -->
<section class="top__mv">
    <div class="top__mv__bg">
      <div class="top__mv__bg-item d-block num-01"></div>
      <div class="top__mv__bg-item d-block num-02"></div>
      <div class="top__mv__bg-item d-block num-03"></div>
    </div>
    <div class="top__mv__content">
      <img class="top__mv__content-logo d-lg-block d-none" style="width: 175px; height:auto;" src="<?php echo $wp_url ?>/dist/images/mv_logo.png" alt="五條市地域商社株式会社のロゴ" srcset="<?php echo $wp_url ?>/dist/images/mv_logo.png 1x, <?php echo $wp_url ?>/dist/images/mv_logo@2x.png 2x">
      <p class="top__mv__content-ttl text-uppercase font-weight-bold">GOJO Local<br>Trading <br>Company</p>
    </div>
</section>
<section class="top__info bg-success py-4 mb-5">
  <div class="top__info__inner row">
    <div class="col-sm-4 p-0">
      <p class="top__info-ttl text-uppercase">Information</p>
    </div>
    <div class="col-sm-8 text-decoladion_underline p-0">
      <?php
        $args = [
            'posts_per_page' => 3,
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
      <a class="col-sm-12 d-block text-secondary text-decoladion_underline mb-2 p-0" href="<?php echo $permalink ?>"><span class="top__info-day text-primary"><?php echo $date ?></span><?php echo $ttl ?>
      </a>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<!-- ▲ メインビジュアル - トップページ -->

<?php elseif (is_page('56') || is_page('58') || is_page('60')):
global $post;
$ttl = $post->post_title;
$slug = $post->post_name;
?>

<!-- ▼ メインビジュアル - お問い合わせページ -->
<section class="submv noimg">
  <div class="container d-flex align-items-center justify-content-center">
    <div class="text-container text-center">
      <h2 class="submv__ttl mincho f-28 text-primary text-uppercase"><?php echo $slug ?></h2>
      <p class="submv__en text-primary mb-0"><?php echo $ttl ?></p>
    </div>
  </div>
</section>
<!-- ▲ メインビジュアル - お問い合わせページ -->

<?php else:
global $post;
$ttl = $post->post_title;
$slug = $post->post_name;
?>

<!-- ▼ メインビジュアル - 下層ページ -->

<section class="submv
<?php if ( is_page('52') || is_tax( 'blog_cat', 'gojo-blog' ) || is_singular( 'gojo-blog' ) ): /* ブログの場合 */ ?>
blog
<?php elseif ( is_page('54') || is_archive() && is_category('news') || is_single() && in_category('news') ): /* お知らせの場合 */ ?>
news
<?php else: /* 通常下層ページ */?>
<?php echo $slug ?>
<?php endif; ?>
">

  <div class="container d-flex align-items-center justify-content-center">
    <div class="text-container text-center">


        <?php if ( is_page('52') || is_tax( 'blog_cat', 'gojo-blog' ) || is_singular( 'gojo-blog' ) ): /* ブログの場合 */ ?>

          <h2 class="submv__ttl mincho f-28 text-white text-uppercase">BLOG</h2>
          <p class="submv__en text-white mb-0">ブログ</p>

        <?php elseif ( is_page('54') || is_archive() && is_category('news') || is_single() && in_category('news') ): /* お知らせの場合 */ ?>

          <h2 class="submv__ttl mincho f-28 text-white text-uppercase">NEWS</h2>
          <p class="submv__en text-white mb-0">お知らせ</p>

        <?php else: /* 通常下層ページ */?>

          <h2 class="submv__ttl mincho f-28 text-white text-uppercase"><?php echo $slug ?></h2>
          <p class="submv__en text-white mb-0"><?php echo $ttl ?></p>

        <?php endif; ?>
      </h2>

    </div>
  </div>
</section>
<!-- ▲ メインビジュアル - 下層ページ -->

<?php endif; ?>
