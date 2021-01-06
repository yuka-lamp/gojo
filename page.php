<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 本文 -->
<section class="single py-5">
  <div class="container">
    <div class="post-content">
    <?php the_content(); ?>
    </div>
  </div>
</section>
<!-- ▲ 本文 -->

<?php get_footer();
