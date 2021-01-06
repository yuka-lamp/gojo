<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="post">
  <div class="container pb-5">
    <div class="post__wrap">
      <?php
      if (have_posts()):
      while (have_posts()): the_post();
      $id = get_the_ID();
      $t = get_the_title();
      $p = get_the_permalink();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      $category = get_the_category();
      $cat = $category[0];
      $cat_slug = $cat->slug;
      if (has_post_thumbnail()) {
          $i = get_the_post_thumbnail_url($id, 'large');
      }
      ?>
      <article class="p-0">
        <!-- ▼ 画像 + タイトル + 日付 -->
        <header class="post-header">
          <h2 class="post-ttl"><?php echo $t; ?></h2>
          <time class="post-time  pb-4" data-time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
          <!-- ▼ サムネイル -->
            <?php if(get_the_post_thumbnail()): // サムネイルがあったら?>
            <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
            <?php else: // サムネイルがなかったら ?>
            <img class="w-100" src="<?php echo $wp_url ?>/dist/images/imgnone.png" alt="<?php echo $ttl ?>" srcset="<?php echo $wp_url ?>/dist/images/imgnone.png 1x, <?php echo $wp_url ?>/dist/images/imgnone@2x.png 2x">
            <?php endif; ?>
          <!-- ▲ サムネイル -->
        </header>
        <!-- ▲ 画像 + タイトル + 日付 -->
        <div class="post-content pt-4">
        <?php the_content(); ?>
        </div>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer();
