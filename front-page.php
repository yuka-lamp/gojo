<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ クーポン券 -->
<div class="text-center pl-5 pr-5 mb-4">
  <a class="border border-success py-3 d-block text-center text-decoration-underline text-secondary" href="<?php echo $wp_url ?>/dist/images/coupon.pdf" target="_blank">五條市お店応援クーポン券<br class="d-block d-md-none">参加店リストについてはこちら<i class="fas fa-external-link-alt ml-3"></i></a>
</div>
<!-- ▲ クーポン券 -->

<!-- ▼ 導入 -->
<section class="top__about py-5">
  <div class="container">
  <h2 class="top__about-ttl">地域を繋ぐ<br>プラットフォームに</h2>
  <p class="text-secondary font-weight-bold mt-4 mb-5">For a platform  <br class="d-block d-md-none">that connects regions</p>
  <div class="text-right">
    <p class="top__about-txt d-inline-block text-left lh-l">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。<br>五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
  </div>
  </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ リンク一覧 -->
<section class="top__links py-5">
  <div class="row w-100 m-0">

    <!-- ▼ リンク -->
    <div class="top__links-item pl-0 pr-0">
      <a href="<?php echo $home ?>/business/" class="d-block text-center">
        <h2 class="ttl2 text-white">Business</h2>
        <p class="text-white mt-3">事業紹介</p>
        <div class="mt-4 text-center">
        <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <!-- ▲ リンク -->

    <!-- ▼ リンク -->
    <div class="top__links-item pl-0 pr-0">
      <a  href="<?php echo $home ?>/company/" class="d-block text-center">
        <h2 class="ttl2 text-white">Company</h2>
        <p class="text-white mt-3">会社概要</p>
        <div class="mt-4 text-center">
          <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <!-- ▲ リンク -->

    <!-- ▼ リンク -->
    <div class="top__links-item pl-0 pr-0">
      <a class="d-block text-center">
        <h2 class="ttl2 text-white">Tour</h2>
        <p class="text-white mt-3">ツアー販売</p>
        <div class="mt-4 text-center">
          <p class="btn btn-primary">comming soon</p>
        </div>
      </a>
    </div>
    <!-- ▲ リンク -->

    <!-- ▼ リンク -->
    <div class="top__links-item pl-0 pr-0">
      <a href="<?php echo $home ?>/product/" class="d-block text-center">
        <h2 class="ttl2 text-white">Product</h2>
        <p class="text-white mt-3">認証商品</p>
        <div class="mt-4 text-center">
          <p class="btn btn-primary">詳しくはこちら</p>
        </div>
      </a>
    </div>
    <!-- ▲ リンク -->
  </div>

  <!-- ▼ リンク -->
  <div class="top__links__store container mt-5">
    <div class="">
      <div class="top__links-item w-100">
        <a class="d-block text-center" href="http://ootou-gojo-shop.com/" target="_blank">
          <h2 class="ttl2 text-white">Store</h2>
          <p class="text-white mt-3">取扱商品</p>
          <div class="mt-4 text-center">
            <p class="btn btn-primary">詳しくはこちら</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- ▲ リンク -->
</section>
<!-- ▲ リンク一覧 -->

<!-- ▼ 五條市ブログ -->
<section class="top__blog blog py-5">
  <!-- ▼ タイトル + 説明文 -->
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-5">
      <div class="main-ttl">
        <h2 class="text-secondary font-weight-bold">Gojo blog<span class="text-primary ml-4">五條市ブログ</span></h2>
      </div>
      <a class="d-md-block d-none font-weight-bold" href="<?php echo $home; ?>/blog/"><img class="mr-3" src="<?php echo $wp_url ?>/dist/images/btn_icon.png" alt="フッター背景" srcset="<?php echo $wp_url ?>/dist/images/btn_icon.png 1x, <?php echo $wp_url ?>/dist/images/btn_icon@2x.png 2x">一覧をみる</a>
    </div>
  </div>
  <!-- ▲ タイトル + 説明文 -->

  <div class="container">
    <!-- ▼ スライドショー -->
    <div class="slick-blog blog__wrap">
      <?php
      $args = [
          'posts_per_page' => 6,
          'post_type' => 'gojo-blog',
          'orderby' => 'date',
          'order' => 'ASC',
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $ttl = get_the_title();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      $permalink = get_the_permalink();
      $date = get_the_date();
      ?>

      <!-- ▼ ループするコンテンツ -->
      <div>
      <a href="<?php echo $permalink ?>" class="blog__item d-block">
        <div class="blog__item__img">
          <?php if( has_post_thumbnail() ):  // 画像がある場合 ?>
            <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
          <?php else: // 画像がない場合 ?>
            <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
          <?php endif; ?>
        </div>
        <div class="blog__item__txt">
          <h3 class="f-15 d-block font-weight-bold mt-4 mb-3" hraf="<?php echo $permalink ?>"><?php echo $ttl ?></h3>
          <p class="d-inline blog__item__txt-info">
            <span class="blog__item__txt-cat">
              <?php if ($terms = get_the_terms($post->ID, 'blog_cat')) {
                  foreach ( $terms as $term ) {
                    echo esc_html($term->name);
                  }
                }
             ?>
            </span>
            <?php echo $date ?>
          </p>
        </div>
      </a>
      </div>
      <!-- ▲ ループするコンテンツ -->

      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <!-- ▲ スライドショー -->

    <!-- ▼ read more -->
    <div class="text-center">
      <a href="<?php echo $home ?>/blog/" class="d-md-none btn btn-primary-b mt-5">詳しくはこちら</a>
    </div>
    <!-- ▲ read more -->

  </div>
</section>
<!-- ▲ 五條市ブログ -->

<!-- ▼ 関連企業 -->
<section class="top__relation pt-5">
  <div class="container pb-5">
    <div class="text-center">
      <h2 class="ttl2 text-secondary">Relation</h2>
      <p class="text-primary mt-3 mb-5">関連企業</p>
    </div>
    <div class="top__relation-inner row">

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.uchinono-yakata.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_1.png" alt="NPO法人うちのの館"  srcset="<?php echo $wp_url ?>/dist/images/relation_1.png 1x, <?php echo $wp_url ?>/dist/images/relation_1@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ NPO法人うちのの館</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://gojo-challenge.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_2.png" alt="株式会社GOJOチャレンジ" srcset="<?php echo $wp_url ?>/dist/images/relation_2.png 1x, <?php echo $wp_url ?>/dist/images/relation_2@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社GOJOチャレンジ</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.gojo.ne.jp/goshin-sen/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_3.png" alt="NPO法人 五新線再生推進会議" srcset="<?php echo $wp_url ?>/dist/images/relation_3.png 1x, <?php echo $wp_url ?>/dist/images/relation_3@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ NPO法人 五新線再生推進会議</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www1.gojo.ne.jp/~yamato/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_4.png" alt="特定非営利活動法人 大和社中" srcset="<?php echo $wp_url ?>/dist/images/relation_4.png 1x, <?php echo $wp_url ?>/dist/images/relation_4@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 特定非営利活動法人 大和社中</p>
        </a>
      </div>
      <!-- ▼ 企業リンク -->

      <!-- ▲ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.gojo.ne.jp/g-kanko/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_5.png" alt="五條市観光協会" srcset="<?php echo $wp_url ?>/dist/images/relation_5.png 1x, <?php echo $wp_url ?>/dist/images/relation_5@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市観光協会</p>
        </a>
      </div>
      <!-- ▼ 企業リンク -->

      <!-- ▲ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://web1.kcn.jp/gojo-mori/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_6.png" alt="五條市森林組合" srcset="<?php echo $wp_url ?>/dist/images/relation_6.png 1x, <?php echo $wp_url ?>/dist/images/relation_6@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市森林組合</p>
        </a>
      </div>
      <!-- ▼ 企業リンク -->

      <!-- ▲ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://genbei.info" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_7.png" alt="株式会社あすも" srcset="<?php echo $wp_url ?>/dist/images/relation_7.png 1x, <?php echo $wp_url ?>/dist/images/relation_7@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社あすも</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://lamidenfance.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_8.png" alt="ラミ ダンファンス アラメゾン" srcset="<?php echo $wp_url ?>/dist/images/relation_8.png 1x, <?php echo $wp_url ?>/dist/images/relation_8@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ ラミ ダンファンス アラメゾン</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://a-kaki.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_9.png" alt="石井物産株式会社" srcset="<?php echo $wp_url ?>/dist/images/relation_9.png 1x, <?php echo $wp_url ?>/dist/images/relation_9@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 石井物産株式会社</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://www.nouyusha.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_10.png" alt="農業生産法人農悠舎王隠堂" srcset="<?php echo $wp_url ?>/dist/images/relation_10.png 1x, <?php echo $wp_url ?>/dist/images/relation_10@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 農業生産法人農悠舎王隠堂</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.0141kaki.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_11.png" alt="株式会社栁澤果樹園" srcset="<?php echo $wp_url ?>/dist/images/relation_11.png 1x, <?php echo $wp_url ?>/dist/images/relation_11@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社栁澤果樹園</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.evaguri.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_12.png" alt="株式会社二升五合" srcset="<?php echo $wp_url ?>/dist/images/relation_12.png 1x, <?php echo $wp_url ?>/dist/images/relation_12@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社二升五合</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.kiyobank.co.jp" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_13.png" alt="株式会社紀陽銀行 五条支店" srcset="<?php echo $wp_url ?>/dist/images/relation_13.png 1x, <?php echo $wp_url ?>/dist/images/relation_13@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社紀陽銀行 五条支店</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.nantobank.co.jp" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_14.png" alt="株式会社南都銀行 五条支店" srcset="<?php echo $wp_url ?>/dist/images/relation_14.png 1x, <?php echo $wp_url ?>/dist/images/relation_14@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社南都銀行 五条支店</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <div class="d-block text-center">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_15.png" alt="有限会社アシスト" srcset="<?php echo $wp_url ?>/dist/images/relation_15.png 1x, <?php echo $wp_url ?>/dist/images/relation_15@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 有限会社アシスト</p>
        </div>
      </div>
      <!-- ▼ 企業リンク -->

      <!-- ▲ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="https://www.city.gojo.lg.jp/" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_16.png" alt="五條市" srcset="<?php echo $wp_url ?>/dist/images/relation_16.png 1x, <?php echo $wp_url ?>/dist/images/relation_16@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 五條市</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

      <!-- ▼ 企業リンク -->
      <div class="top__relation-item col-6 col-sm-3">
        <a class="d-block text-center" href="http://kakinoha.com" target="_blank">
          <div class="top__relation-img">
            <img src="<?php echo $wp_url; ?>/dist/images/relation_17.png" alt="株式会社柿の葉ずしヤマト" srcset="<?php echo $wp_url ?>/dist/images/relation_17.png 1x, <?php echo $wp_url ?>/dist/images/relation_17@2x.png 2x">
          </div>
          <p class="top__relation-item-text m-0 d-block">＞ 株式会社柿の葉ずしヤマト</p>
        </a>
      </div>
      <!-- ▲ 企業リンク -->

    </div>
  </div>
</section>
<!-- ▲ 関連企業 -->

<?php get_footer();
