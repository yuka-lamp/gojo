<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="business__about sec-line">
  <div class="container">
    <h2 class="mb-5">地域を繋ぐ<br>プラットフォームに</h2>
    <p class="d-block text-left lh-l cc">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。<br>五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
  </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ 地域商社事業 -->
<section class="business__about sec-line">
  <div class="container">
    <div class="main-ttl">
      <h2 class="text-secondary font-weight-bold">Trading Company<span class="text-primary">地域商社事業</span></h2>
      <p class="d-block text-left lh-l py-4">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
    </div>
    <div class="d-flex">
      <?php query_posts( array(
        'post_type' => 'biz_item', //カスタム投稿名を指定
        'taxonomy' => 'biz_cat',     //タクソノミー名を指定
        'term' => 'tc',           //タームのスラッグを指定
        'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
      ));
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <!-- ▼ ループするコンテンツ -->
      <a hraf="<?php get_the_permalink(); ?>" class="blog__item col-12 col-md-3">
        <div class="blog__item__img">
            <!-- ▼ アイキャッチ画像 -->
            <div class="menu__list-item-img">
              <?php if(post_custom('image')):  // 画像がある場合 ?>
                <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>">
              <?php else: // 画像がない場合 ?>
                <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
              <?php endif; ?>
            </div>
            <!-- ▲ アイキャッチ画像 -->
        </div>
        <div class="blog__item__txt">
          <?php the_title(); ?>
        </div>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- ▲ 地域商社事業 -->

<?php get_footer();
