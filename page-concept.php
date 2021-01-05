<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ コンテンツ1 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between">
    <div class="concept__content-txt col-md-6">
      <p class="concept__content-num f-16 text-secondary">01</p>
      <h2 class="concept__content-ttl mb-5">信頼ある「ものづくり」で<br>地域社会へ貢献を</h2>
      <p class="text-left lh-l">当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、全国の各地域と連携協働しながら、活力ある「ローカルブランド」を総合的にプロデュースしてまいりたい考えております。
      <br>当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、</p>
    </div>
    <div class="concept__content-img col-md-5">
      <img class="mr-3 w-100" src="<?php echo $wp_url ?>/dist/images/concept_1.png" alt="" srcset="<?php echo $wp_url ?>/dist/images/btn_icon.png 1x, <?php echo $wp_url ?>/dist/images/concept_1@2x.png 2x">
    </div>
  </div>
</section>
<!-- ▲ コンテンツ1 -->

<!-- ▼ コンテンツ2 -->
<section class="concept__content sec-t">
  <div class="container d-md-flex justify-content-between">
    <div class="concept__content-txt col-md-6">
      <p class="concept__content-num f-16 text-secondary">02</p>
      <h2 class="concept__content-ttl mb-5">信頼ある「ものづくり」で<br>地域社会へ貢献を</h2>
      <p class="text-left lh-l">当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、全国の各地域と連携協働しながら、活力ある「ローカルブランド」を総合的にプロデュースしてまいりたい考えております。
      <br>当社「ファーマーズ・フォレスト」は、ろまんちっく村をはじめとする交流資源を通じ、次世代のアグリカルチャーとエコツーリズムを目指した「ものづくり」「ひとづくり」「まちづくり」に挑戦し、</p>
    </div>
    <div class="concept__content-img col-md-5">
      <img class="mr-3 w-100" src="<?php echo $wp_url ?>/dist/images/concept_1.png" alt="" srcset="<?php echo $wp_url ?>/dist/images/btn_icon.png 1x, <?php echo $wp_url ?>/dist/images/concept_1@2x.png 2x">
    </div>
  </div>
</section>
<!-- ▲ コンテンツ2 -->

<?php get_footer();
