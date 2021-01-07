<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ お問い合わせ -->
<section class="contact container">
  <div class="text-center sec-line">
    <p class="d-block lh-l pb-3">
      お問い合わせ、ご質問等は下記のフォームより
      <br class="d-block d-md-none">お気軽にお問い合わせください。
      <br>お問い合わせ内容の確認後、
      <br class="d-block d-md-none">担当者よりご連絡させて頂きます。
    </p>
    <p class="f-18 mb-2">お電話でのご相談はこちらから</p>
    <a class="contact__tel" href="tel:0747-35-0311"><span>TEL</span>0747-35-0311</a>
  </div>
  <!-- ▼ フォーム -->
  <?php the_content(); ?>
  <!-- ▲ フォーム -->
</section>
<!-- ▲ お問い合わせ -->

<?php get_footer();
