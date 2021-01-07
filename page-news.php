<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="news">
  <div class="container">
    <div class="news__wrap text-decoladion_underline p-0">
      <?php
        $args = [
            'posts_per_page' => -1,
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

      <!-- ▼ ループするコンテンツ -->
      <a class="news__item text-secondary text-decoladion_underline m-0 py-4" href="<?php echo $permalink ?>">
        <span class="news__item-day text-info f-12"><?php echo $date ?></span>
        <span class="news__item-ttl"><span><?php echo $ttl ?></span>
      </a>
      <!-- ▲ ループするコンテンツ -->
      
      <?php endforeach; wp_reset_postdata(); ?>

      <!-- ▼ ページネーション -->
      <?php
      if (function_exists('wp_pagenavi')) {
      wp_pagenavi(['query' => $wp_query]);
      }
      ?>
      <!-- ▲ ページネーション -->

    </div>
  </div>
</section>
<!-- ▲ 導入 -->

<?php get_footer();
