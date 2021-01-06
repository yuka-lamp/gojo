<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="blog">
  <div class="container">

    <nav class="blog__nav nav nav-pills nav-fill pb-5">
      <a class="nav-item nav-link active">すべて</a>
      <a class="nav-item nav-link" href="<?php echo $home ?>/blog_cat/cat-1/">カテゴリ1</a>
      <a class="nav-item nav-link" href="<?php echo $home ?>/blog_cat/cat-2/">カテゴリ2</a>
      <a class="nav-item nav-link" href="<?php echo $home ?>/blog_cat/cat-3/">カテゴリ3</a>
      <a class="nav-item nav-link" href="<?php echo $home ?>/blog_cat/cat-4/">カテゴリ4</a>
    </nav>

    <!-- ▼ 一覧 -->
    <div class="blog__list d-flex flex-wrap mt-4">
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
      $cat = get_the_term_list($post->ID, 'blog_cat', $before, $sep, $after);
      ?>

      <!-- ▼ ループするコンテンツ -->
      <div class="blog__list__wrap">
        <a hraf="<?php echo $permalink ?>" class="blog__item d-block">
          <div class="blog__item__img">
            <?php if( has_post_thumbnail() ):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
            <?php endif; ?>
          </div>
          <div class="blog__item__txt">
            <h3 class="f-15 d-block font-weight-bold mt-4 mb-3" hraf="<?php echo $permalink ?>"><?php echo $ttl ?></h3>
            <div class="d-inline blog__item__txt-info"><?php echo $cat ?><?php echo $date ?></div>
          </div>
        </a>
      </div>
      <!-- ▲ ループするコンテンツ -->

      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <!-- ▲ 一覧 -->

  </div>
</section>
<!-- ▲ 導入 -->

<?php get_footer();
