<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="top__about py-5">
  <div class="container">
  <h2 class="top__about-ttl">「ものづくり」で地域社会へ貢献を</h2>
  <p class="text-secondary font-weight-bold mt-4 mb-5">Contributing to the local community<br>through “manufacturing”</p>
  <div class="text-right">
    <p class="top__about-txt d-inline-block text-left lh-l">当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、全国の各地域と連携協働しながら、活力ある「ローカルブランド」を総合的にプロデュースしてまいりたい考えております。<br>当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流</p>
  </div>
  </div>
</section>

<section class="top__links py-5">
  <div class="row bg-primary w-100 m-0">
    <div class="top__links-item py-5 pl-0 pr-0">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Service</h2>
        <p class="text-white mt-3">事業紹介</p>
        <div class="mt-4 text-center">
        <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <div class="top__links-item py-5 pl-0 pr-0">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Company</h2>
        <p class="text-white mt-3">会社概要</p>
        <div class="mt-4 text-center">
        <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <div class="top__links-item py-5 pl-0 pr-0">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Tour</h2>
        <p class="text-white mt-3">ツアー販売</p>
        <div class="mt-4 text-center">
        <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <div class="top__links-item py-5 pl-0 pr-0">
      <a class="d-block text-center" href="#">
        <h2 class="ttl2 text-white">Product</h2>
        <p class="text-white mt-3">認証商品</p>
        <div class="mt-4 text-center">
        <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
  </div>
  <div class="top__links__store container mt-5">
    <div class="bg-primary">
      <div class="top__links-item w-100 py-5">
        <a class="d-block text-center" href="http://ootou-gojo-shop.com/" target="_blank">
          <h2 class="ttl2 text-white">product</h2>
          <p class="text-white mt-3">認証商品</p>
          <div class="mt-4 text-center">
          <p class="btn btn-primary">詳しくはこちら</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="top__blog blog py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-5">
      <div class="main-ttl">
        <h2 class="text-secondary font-weight-bold">Gojo blog<span class="text-primary">五條市ブログ</span></h2>
      </div>
      <a class="d-md-block d-none font-weight-bold" href="<?php echo $home; ?>/blog/"><img class="mr-3" src="<?php echo $wp_url ?>/dist/images/btn_icon.png" alt="フッター背景" srcset="<?php echo $wp_url ?>/dist/images/btn_icon.png 1x, <?php echo $wp_url ?>/dist/images/btn_icon@2x.png 2x">一覧をみる</a>
    </div>
  </div>
  <div class="container">
    <div class="slick-blog blog__wrap">
      <?php
      $args = [
          'posts_per_page' => 6,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'ASC',
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      $ttl = get_the_title();
      $permalink = get_the_permalink();
      $date = get_the_date();
      $cat = get_the_term_list($post->ID, 'blog_cat', $before, $sep, $after);
      ?>
      <div class="blog__item">
        <div class="blog__item__img">
          <a class="d-block" hraf="<?php echo $permalink ?>">
            <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
          </a>
        </div>
        <div class="blog__item__txt">
          <a class="d-block text-weight-bold mt-4 mb-3" hraf="<?php echo $permalink ?>"><?php echo $ttl ?></a>
          <div class="d-inline blog__item__txt-info"><?php echo $cat ?><?php echo $date ?></div>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <div class="text-center">
      <a href="<?php echo $home ?>/blog/" class="d-md-none btn btn-primary-b mt-5">詳しくはこちら</a>
    </div>
  </div>
</section>

<section class="top__relation py-5">
  <div class="container">
    <div class="row pl-5 pr-5">
      <div class="col-sm-4">
        <a class="d-block text-center" href="#" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_1.png" alt="<?php echo $ttl ?>">
          </div>
          <p class="d-block">＞ 望遠鏡工作キット製作・オルビィス</p>
        </a>
      </div>
      <div class="col-sm-4">
        <a class="d-block text-center" href="#" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_2.png" alt="<?php echo $ttl ?>">
          </div>
          <p class="d-block">＞ 協栄産業株式会社・大阪店</p>
        </a>
      </div>
      <div class="col-sm-4">
        <a class="d-block text-center" href="#" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_3.png" alt="<?php echo $ttl ?>">
          </div>
          <p class="d-block">＞ 道の駅公式ホームページ</p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
