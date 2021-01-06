<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="business__about sec-line w-90-sp">
  <div class="container">
    <h2 class="mb-5">地域を繋ぐ<br>プラットフォームに</h2>
    <p class="d-block text-left lh-l cc">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。<br>五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。<br>五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
  </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ 地域商社事業 -->
<section class="business__service w-90-sp pt-0">
  <div class="container">
    <div class="main-ttl">
      <h2 class="text-secondary font-weight-bold pb-0">Trading Company<br class="d-block d-md-none"><span class="text-primary">地域商社事業</span></h2>
      <p class="d-block text-left lh-l pt-3 pb-4">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
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
      <a hraf="<?php get_the_permalink(); ?>" class="business__service__item">
          <!-- ▼ アイキャッチ画像 -->
          <div class="business__service__item-img">
            <?php if( has_post_thumbnail() ):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ アイキャッチ画像 -->
        <div class="business__service__item-txt">
          <p class="f-15 font-weight-bold pt-3 pb-2 m-0"><?php the_title(); ?></p>
          <!-- 説明文を取得 -->
          <?php
          if(mb_strlen($post->post_content, 'UTF-8')>60){
          	$title= mb_substr($post->post_content, 0, 60, 'UTF-8');
          	echo $title.'…';
          }else{
          	echo $post->post_content;
          }
          ?>
        </div>
        <p class="business__service__item-btn d-block mt-2 mb-0">VIEW MORE</p>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- ▲ 地域商社事業 -->

<!-- ▼ 指定管理運営事業 -->
<section class="business__service w-90-sp">
  <div class="container">
    <div class="main-ttl">
      <h2 class="text-secondary font-weight-bold pb-0">management<br class="d-block d-md-none"><span class="text-primary">指定管理運営事業</span></h2>
      <p class="d-block text-left lh-l pt-3 pb-4">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
      <?php query_posts( array(
        'post_type' => 'biz_item', //カスタム投稿名を指定
        'taxonomy' => 'biz_cat',   //タクソノミー名を指定
        'term' => 'management',    //タームのスラッグを指定
        'posts_per_page' => -1     //表示件数（-1で全ての記事を表示）
      ));
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <!-- ▼ ループするコンテンツ -->
      <a hraf="<?php get_the_permalink(); ?>" class="business__service__item">
          <!-- ▼ アイキャッチ画像 -->
          <div class="business__service__item-img">
            <?php if( has_post_thumbnail() ):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ アイキャッチ画像 -->
        <div class="business__service__item-txt">
          <p class="f-15 font-weight-bold pt-3 pb-2 m-0"><?php the_title(); ?></p>
          <!-- 説明文を取得 -->
          <?php
          if(mb_strlen($post->post_content, 'UTF-8')>60){
          	$title= mb_substr($post->post_content, 0, 60, 'UTF-8');
          	echo $title.'…';
          }else{
          	echo $post->post_content;
          }
          ?>
        </div>
        <p class="business__service__item-btn d-block mt-2 mb-0">VIEW MORE</p>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- ▲ 指定管理運営事業 -->

<!-- ▼ 認証商品一覧 -->
<section class="business__service w-90-sp">
  <div class="container">
    <div class="main-ttl">
      <h2 class="text-secondary font-weight-bold pb-0">product<br class="d-block d-md-none"><span class="text-primary">指定管理運営事業</span></h2>
      <p class="d-block text-left lh-l pt-3 pb-4">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、稼げるまちづくりを実現していきます。</p>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
      <?php query_posts( array(
        'post_type' => 'biz_item', //カスタム投稿名を指定
        'taxonomy' => 'biz_cat',   //タクソノミー名を指定
        'term' => 'product',    //タームのスラッグを指定
        'posts_per_page' => -1     //表示件数（-1で全ての記事を表示）
      ));
      ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <!-- ▼ ループするコンテンツ -->
      <a hraf="<?php get_the_permalink(); ?>" class="business__service__item">
          <!-- ▼ アイキャッチ画像 -->
          <div class="business__service__item-img">
            <?php if(has_post_thumbnail()):  // 画像がある場合 ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ アイキャッチ画像 -->
        <div class="business__service__item-txt">
          <p class="f-15 font-weight-bold pt-3 pb-2 m-0"><?php the_title(); ?></p>
          <!-- 説明文を取得 -->
          <?php
          if(mb_strlen($post->post_content, 'UTF-8')>60){
          	$title= mb_substr($post->post_content, 0, 60, 'UTF-8');
          	echo $title.'…';
          }else{
          	echo $post->post_content;
          }
          ?>
        </div>
        <p class="business__service__item-btn d-block mt-2 mb-0">VIEW MORE</p>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- ▲ 認証商品一覧 -->

<?php get_footer();
