<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="container">
<div class="main-ttl">
  <h2 class="font-weight-bold pb-0">五條市地域商社株式会社の<br>5つの理念</h2>
</div>
</section>

<!-- ▼ コンテンツ1 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between border-bottom border-success pt-5 pb-4">
    <div class="concept__content-img col-md-3">
      <h4 class="text-secondary mb-4">Philosophy 01</h4>
    </div>
    <div class="concept__content-txt col-md-9">
      <p class="f-18 font-weight-bold">地域内経済の循環</p>
      <p class="text-left lh-l">地域資源の有機的連携より五條市内で経済を循環させます。これにより、五條市全体が潤う地域づくりを目指します。</p>
    </div>
  </div>
</section>
<!-- ▲ コンテンツ1 -->

<!-- ▼ コンテンツ2 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between border-bottom border-success pt-5 pb-4">
    <div class="concept__content-img col-md-3">
      <h4 class="text-secondary mb-4">Philosophy 02</h4>
    </div>
    <div class="concept__content-txt col-md-9">
      <p class="f-18 font-weight-bold">経済・産業振興</p>
      <p class="text-left lh-l">民間の経営力と行政の信用力とを掛け合わせ、適正な利益のもとで公益性のある事業を実施し、五條市全体の経済・産業振興に貢献します。</p>
    </div>
  </div>
</section>
<!-- ▲ コンテンツ2 -->

<!-- ▼ コンテンツ3 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between border-bottom border-success pt-5 pb-4">
    <div class="concept__content-img col-md-3">
      <h4 class="text-secondary mb-4">Philosophy 03</h4>
    </div>
    <div class="concept__content-txt col-md-9">
      <p class="f-18 font-weight-bold">地域雇用促進</p>
      <p class="text-left lh-l">五條市内の雇用を促進します。特に、高齢者や女性が働くことのできる事業を推進し、誰もが活躍できる地域社会の実現に貢献します。</p>
    </div>
  </div>
</section>
<!-- ▲ コンテンツ3 -->

<!-- ▼ コンテンツ4 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between border-bottom border-success pt-5 pb-4">
    <div class="concept__content-img col-md-3">
      <h4 class="text-secondary mb-4">Philosophy 04</h4>
    </div>
    <div class="concept__content-txt col-md-9">
      <p class="f-18 font-weight-bold">地域人材育成</p>
      <p class="text-left lh-l">地域課題に向けて主体的に活動できる人材を育成します。特に、五條市の未来を担う若手人材の育成を推進し、持続可能な地域社会の実現に貢献します。</p>
    </div>
  </div>
</section>
<!-- ▲ コンテンツ4 -->

<!-- ▼ コンテンツ5 -->
<section class="concept__content">
  <div class="container d-md-flex justify-content-between pt-5 pb-4">
    <div class="concept__content-img col-md-3">
      <h4 class="text-secondary mb-4">Philosophy 05</h4>
    </div>
    <div class="concept__content-txt col-md-9">
      <p class="f-18 font-weight-bold">関係人口創出</p>
      <p class="text-left lh-l">地域資源のブランド化を推進し、五條市の魅力を向上させます。これにより、五條市に継続的に多様な形でかかわる関係人口の創出を目指します。</p>
    </div>
  </div>
</section>
<!-- ▲ コンテンツ5 -->

<?php get_footer();
