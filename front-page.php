<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="top__about py-5">
  <div class="container">
  <h2 class="top__about-ttl">地域を繋ぐ<br>プラットフォームに</h2>
  <p class="text-secondary font-weight-bold mt-4 mb-5">For a platform  <br class="d-block d-md-none">that connects regions</p>
  <div class="text-right">
    <p class="top__about-txt d-inline-block text-left lh-l">当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、全国の各地域と連携協働しながら、活力ある「ローカルブランド」を総合的にプロデュースしてまいりたい考えております。<br>当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流</p>
  </div>
  </div>
</section>

<section class="top__links py-5">
  <div class="row w-100 m-0">
    <div class="top__links-item pl-0 pr-0">
      <a class="d-block text-center">
        <h2 class="ttl2 text-white">Service</h2>
        <p class="text-white mt-3">事業紹介</p>
        <div class="mt-4 text-center">
        <!-- <p class="btn btn-primary">詳しくはこちら</p> -->
        <p class="btn btn-primary">Coming soon</p>
        </div>
      </a>
    </div>
    <div class="top__links-item pl-0 pr-0">
      <a class="d-block text-center">
        <h2 class="ttl2 text-white">Company</h2>
        <p class="text-white mt-3">会社概要</p>
        <div class="mt-4 text-center">
          <!-- <p class="btn btn-primary">詳しくはこちら</p> -->
          <p class="btn btn-primary">Coming soon</p>
        </div>
      </a>
    </div>
    <div class="top__links-item pl-0 pr-0">
      <a class="d-block text-center">
        <h2 class="ttl2 text-white">Tour</h2>
        <p class="text-white mt-3">ツアー販売</p>
        <div class="mt-4 text-center">
          <!-- <p class="btn btn-primary">詳しくはこちら</p> -->
          <p class="btn btn-primary">Coming soon</p>
        </div>
      </a>
    </div>
    <div class="top__links-item pl-0 pr-0">
      <a class="d-block text-center">
        <h2 class="ttl2 text-white">Product</h2>
        <p class="text-white mt-3">認証商品</p>
        <div class="mt-4 text-center">
          <!-- <p class="btn btn-primary">詳しくはこちら</p> -->
          <p class="btn btn-primary">Coming soon</p>
        </div>
      </a>
    </div>
  </div>
  <div class="top__links__store container mt-5">
    <div class="">
      <div class="top__links-item w-100">
        <a class="d-block text-center" href="http://ootou-gojo-shop.com/" target="_blank">
          <h2 class="ttl2 text-white">Store</h2>
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
      <!-- <a class="d-md-block d-none font-weight-bold" href="<?php echo $home; ?>/blog/"><img class="mr-3" src="<?php echo $wp_url ?>/dist/images/btn_icon.png" alt="フッター背景" srcset="<?php echo $wp_url ?>/dist/images/btn_icon.png 1x, <?php echo $wp_url ?>/dist/images/btn_icon@2x.png 2x">一覧をみる</a> -->
    </div>
  </div>
  <div class="container">
    <div class="slick-blog blog__wrap">

      <!-- 本公開後削除 -->

      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <div class="blog__item">
        <div class="blog__item__img py-5 bg-success">
          <p class="py-5 d-block text-center mb-0">COMING SOON</p>
        </div>
      </div>
      <!-- 本公開後削除 -->

      <!-- <?php
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
      <?php endforeach; wp_reset_postdata(); ?> -->
    </div>
    <!-- <div class="text-center">
      <a href="<?php echo $home ?>/blog/" class="d-md-none btn btn-primary-b mt-5">詳しくはこちら</a>
    </div> -->
  </div>
</section>

<section class="top__relation py-5">
  <div class="container">
    <div class="top__relation-inner row">
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.uchinono-yakata.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_1.png" alt="NPO法人うちのの館"  srcset="<?php echo $wp_url ?>/dist/images/relation_1.png 1x, <?php echo $wp_url ?>/dist/images/relation_1@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ NPO法人うちのの館</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://gojo-challenge.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_2.png" alt="株式会社GOJOチャレンジ" srcset="<?php echo $wp_url ?>/dist/images/relation_2.png 1x, <?php echo $wp_url ?>/dist/images/relation_2@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社GOJOチャレンジ</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.gojo.ne.jp/goshin-sen/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_3.png" alt="NPO法人 五新線再生推進会議" srcset="<?php echo $wp_url ?>/dist/images/relation_3.png 1x, <?php echo $wp_url ?>/dist/images/relation_3@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ NPO法人 五新線再生推進会議</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www1.gojo.ne.jp/~yamato/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_4.png" alt="特定非営利活動法人 大和社中" srcset="<?php echo $wp_url ?>/dist/images/relation_4.png 1x, <?php echo $wp_url ?>/dist/images/relation_4@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 特定非営利活動法人 大和社中</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.gojo.ne.jp/g-kanko/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_5.png" alt="五條市観光協会" srcset="<?php echo $wp_url ?>/dist/images/relation_5.png 1x, <?php echo $wp_url ?>/dist/images/relation_5@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市観光協会</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://web1.kcn.jp/gojo-mori/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_6.png" alt="五條市森林組合" srcset="<?php echo $wp_url ?>/dist/images/relation_6.png 1x, <?php echo $wp_url ?>/dist/images/relation_6@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市森林組合</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://genbei.info" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_7.png" alt="株式会社あすも" srcset="<?php echo $wp_url ?>/dist/images/relation_7.png 1x, <?php echo $wp_url ?>/dist/images/relation_7@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社あすも</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://lamidenfance.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_8.png" alt="ラミ ダンファンス アラメゾン" srcset="<?php echo $wp_url ?>/dist/images/relation_8.png 1x, <?php echo $wp_url ?>/dist/images/relation_8@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ ラミ ダンファンス アラメゾン</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://a-kaki.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_9.png" alt="石井物産株式会社" srcset="<?php echo $wp_url ?>/dist/images/relation_9.png 1x, <?php echo $wp_url ?>/dist/images/relation_9@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 石井物産株式会社</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.nouyusha.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_10.png" alt="農業生産法人農悠舎王隠堂" srcset="<?php echo $wp_url ?>/dist/images/relation_10.png 1x, <?php echo $wp_url ?>/dist/images/relation_10@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 農業生産法人農悠舎王隠堂</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.0141kaki.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_11.png" alt="株式会社栁澤果樹園" srcset="<?php echo $wp_url ?>/dist/images/relation_11.png 1x, <?php echo $wp_url ?>/dist/images/relation_11@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社栁澤果樹園</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.evaguri.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_12.png" alt="株式会社二升五合" srcset="<?php echo $wp_url ?>/dist/images/relation_12.png 1x, <?php echo $wp_url ?>/dist/images/relation_12@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社二升五合</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.kiyobank.co.jp" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_13.png" alt="株式会社紀陽銀行 五条支店" srcset="<?php echo $wp_url ?>/dist/images/relation_13.png 1x, <?php echo $wp_url ?>/dist/images/relation_13@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社紀陽銀行 五条支店</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.nantobank.co.jp" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_14.png" alt="株式会社南都銀行 五条支店" srcset="<?php echo $wp_url ?>/dist/images/relation_14.png 1x, <?php echo $wp_url ?>/dist/images/relation_14@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社南都銀行 五条支店</p>
        </a>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <div class="d-block text-center">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_15.png" alt="有限会社アシスト" srcset="<?php echo $wp_url ?>/dist/images/relation_15.png 1x, <?php echo $wp_url ?>/dist/images/relation_15@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 有限会社アシスト</p>
        </div>
      </div>
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="#" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_16.png" alt="五條市" srcset="<?php echo $wp_url ?>/dist/images/relation_16.png 1x, <?php echo $wp_url ?>/dist/images/relation_16@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市</p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
