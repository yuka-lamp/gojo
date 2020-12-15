<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="py-5">
<div class="container">
  <div class="slick-blog blog__wrap row">
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
    <div class="blog__item col-sm-4">
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
<!-- /row -->
</div>
<!-- /container -->
</section>
<!-- /mainsection -->

<?php get_footer();
