<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="">
  <div class="container">
  </div>
</section>
<!-- ▲ 導入 -->

<?php get_footer();
