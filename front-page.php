<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="top__about py-5">
  <div class="container">
  <h2 class="top__about-ttl">「ものづくり」で地域社会へ貢献を</h2>
  <p class="text-secondary font-weight-bold">Contributing to the local community<br>through “manufacturing”</p>
  <p class="w-75">当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、全国の各地域と連携協働しながら、活力ある「ローカルブランド」を総合的にプロデュースしてまいりたい考えております。<br>当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流</p>
  </div>
</section>

<section class="top__links py-5">
  <div class="row bg-primary">
    <div class="top__links-item col-sm-6 py-5">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Service</h2>
        <p class="text-white mt-3">事業紹介</p>
        <div class="mt-4 text-center">
        <a class="btn btn-primary" href="<?php echo $home; ?>/service/">詳しくはこちら</a>
        </div>
      </a>
    </div>
    <div class="top__links-item col-sm-6 py-5">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Company</h2>
        <p class="text-white mt-3">会社概要</p>
        <div class="mt-4 text-center">
        <a class="btn btn-primary" href="<?php echo $home; ?>/company/">詳しくはこちら</a>
        </div>
      </a>
    </div>
    <div class="top__links-item col-sm-6 py-5">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Tour</h2>
        <p class="text-white mt-3">ツアー販売</p>
        <div class="mt-4 text-center">
        <a class="btn btn-primary" href="<?php echo $home; ?>/tour/">詳しくはこちら</a>
        </div>
      </a>
    </div>
    <div class="top__links-item col-sm-6 py-5">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Product</h2>
        <p class="text-white mt-3">認証商品</p>
        <div class="mt-4 text-center">
        <a class="btn btn-primary" href="<?php echo $home; ?>/product/">詳しくはこちら</a>
        </div>
      </a>
    </div>
  </div>
  <div class="container mt-5">
    <div class="bg-primary">
      <div class="top__links-item py-5">
        <a class="d-block text-center" href="#">
          <h2 class="ttl2 text-white">product</h2>
          <p class="text-white mt-3">認証商品</p>
          <div class="mt-4 text-center">
          <a class="btn btn-primary" href="<?php echo $home; ?>/product/">詳しくはこちら</a>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="top__blog blog">
  <div class="container">
    <div class="blog__wrap row">
      <div class="blog__item col-sm-4">
        <div class="blog__item__img">
          <a class="d-block" hraf="#">
            <img class="bg-secondary" src="#" alt="">
          </a>
        </div>
        <div class="blog__item__txt">
          <a class="d-block" hraf="#">
            <p class="text-weight-bold">地域の隠れた資源やストーリーを掘り起こして組み合わせ地域の新たな魅力</p>
            <p class="blog__item__txt-tag text-gray">FOOD</p>
            <p class="blog__item__txt-date text-gray">2020.01.01</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer();
