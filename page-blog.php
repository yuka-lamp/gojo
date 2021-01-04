<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 導入 -->
<section class="about__feature">
  <div class="top-topic-container d-block d-md-flex">
    <!-- ▼ テキスト -->
    <div class="about__feature-text deco-1 col-12 col-md-6">
      <h2 class="f-28 mincho lh-large mb-5">こだわって40余年。<br>真心も美味しさも特上です。</h2>
      <p class="lh-large mincho">ネタは勿論、米や酢、お茶や醤油、わさび、海苔、それに店内の清潔さ、<br>スタッフの気配り心配りと細部にまでしっかりこだわっています。<br>むさしのすしは、1977年創業以来、独自の美味への道を貫き、オリジナルの食材、調理、調味にこだわりつづけています。その基本にあるのが真心です。</p>
    </div>
    <!-- ▲ テキスト -->
    <!-- ▼ 写真 -->
    <div class="about__feature-img col-12 col-md-6">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_feature.png" alt="こだわって40余年。真心も美味しさも特上です。" srcset="<?php echo $wp_url ?>/dist/images/about_feature.png 1x, <?php echo $wp_url ?>/dist/images/about_feature@2x.png 2x">
    </div>
    <!-- ▲ 写真 -->
  </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ 内観写真 -->
<div class="about__interior">
  <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_interior.png" alt="寿司のむさし内観写真" srcset="<?php echo $wp_url ?>/dist/images/about_interior.png 1x, <?php echo $wp_url ?>/dist/images/about_interior@2x.png 2x">
</div>
<!-- ▲ 内観写真 -->

<!-- ▼ むさしの特徴 -->
<div class="about__point">
  <!-- ▼ お米 -->
  <div class="about__point-item d-block d-lg-flex align-items-center">
    <div class="about__point-item-text col-12 col-lg-6 d-flex jestily-content-center align-items-center">
      <div class="about__point-item-text-inner">
        <h3 class="f-26 mincho my-5">やっとたどり着いた、<br>寿司米のベスト</h3>
        <p class="mincho lh-large">播州・備前産の、コシヒカリと朝日米、あけぼのの三銘柄の各持味を生かしたオリジナルブレンド。栽培から貯蔵精米まで徹底管理して、ふっくらと炊きあげました。</p>
      </div>
    </div>
    <div class="about__point-item-img col-12 col-lg-6 m-0 p-0">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_point_1.png" alt="やっとたどり着いた寿司米のベスト" srcset="<?php echo $wp_url ?>/dist/images/about_point_1.png 1x, <?php echo $wp_url ?>/dist/images/about_point_1@2x.png 2x">
    </div>
  </div>
  <!-- ▲ お米 -->
  <!-- ▼ 酢 -->
  <div class="about__point-item d-block d-lg-flex align-items-center">
    <div class="about__point-item-text col-12 col-lg-6 d-flex jestily-content-center align-items-center">
      <div class="about__point-item-text-inner">
        <h3 class="f-26 mincho my-5">昆布だしが生きている、<br>絶妙の合わせ酢</h3>
        <p class="mincho lh-large">すし飯の味をひきたてるすっきりとした生酢に天然昆布の旨味と風味づけをたっぷりと。合成甘味料を使わず砂糖だけで甘味を出した後味のさっぱりした味付けです。</p>
      </div>
    </div>
    <div class="about__point-item-img col-12 col-lg-6 m-0 p-0">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_point_2.png" alt="やっとたどり着いた寿司米のベスト" srcset="<?php echo $wp_url ?>/dist/images/about_point_2.png 1x, <?php echo $wp_url ?>/dist/images/about_point_2@2x.png 2x">
    </div>
  </div>
  <!-- ▲ 酢 -->
  <!-- ▼ 魚 -->
  <div class="about__point-item d-block d-lg-flex align-items-center">
    <div class="about__point-item-text col-12 col-lg-6 d-flex jestily-content-center align-items-center">
      <div class="about__point-item-text-inner">
        <h3 class="f-26 mincho my-5">むさしこだわりの<br>新鮮で安心・安全なネタ</h3>
        <p class="mincho lh-large">一部のネタ（アジ・サバ等）は舞鶴の漁港にて「直購い」を行っており、京都の“漁師”がその日に揚げた魚を、寿しのむさしがその日に提供しています。特別なむさしの味をご堪能ください。</p>
      </div>
    </div>
    <div class="about__point-item-img col-12 col-lg-6 m-0 p-0">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_point_3.png" alt="昆布だしが生きている絶妙の合わせ酢" srcset="<?php echo $wp_url ?>/dist/images/about_point_3.png 1x, <?php echo $wp_url ?>/dist/images/about_point_3@2x.png 2x">
    </div>
  </div>
  <!-- ▲ 魚 -->
  <!-- ▼ 醤油 -->
  <div class="about__point-item d-block d-lg-flex align-items-center">
    <div class="about__point-item-text col-12 col-lg-6 d-flex jestily-content-center align-items-center">
      <div class="about__point-item-text-inner">
        <h3 class="f-26 mincho my-5">自然がかもした、<br>専用のブレンド醤油</h3>
        <p class="mincho lh-large">名醸地、播州・龍野で長期熟成された「たまり」と本醸造「こいくち」醤油（原料は、健やかな大豆と小麦）をブレンド。秘伝の調味配合で仕立てたオリジナルです。</p>
      </div>
    </div>
    <div class="about__point-item-img col-12 col-lg-6 m-0 p-0">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_point_4.png" alt="自然がかもした専用のブレンド醤油" srcset="<?php echo $wp_url ?>/dist/images/about_point_4.png 1x, <?php echo $wp_url ?>/dist/images/about_point_4@2x.png 2x">
    </div>
  </div>
  <!-- ▲ 醤油 -->
  <!-- ▼ お茶 -->
  <div class="about__point-item d-block d-lg-flex align-items-center">
    <div class="about__point-item-text col-12 col-lg-6 d-flex jestily-content-center align-items-center">
      <div class="about__point-item-text-inner">
        <h3 class="f-26 mincho my-5">ちまたで噂の、<br>銘茶の秘密</h3>
        <p class="mincho lh-large">静岡茶の香り、宇治茶の上品さ、嬉野茶のまったりした甘味を利き茶を重ねて秘伝の調合でブレンド。さっぱりした風味で、ついつい食がすすみます。話題沸騰の味。</p>
      </div>
    </div>
    <div class="about__point-item-img col-12 col-lg-6 m-0 p-0">
      <img class="w-100" src="<?php echo $wp_url ?>/dist/images/about_point_5.png" alt="ちまたで噂の銘茶の秘密" srcset="<?php echo $wp_url ?>/dist/images/about_point_5.png 1x, <?php echo $wp_url ?>/dist/images/about_point_5@2x.png 2x">
    </div>
  </div>
  <!-- ▲ お茶 -->
</div>
<!-- ▲ むさしの特徴 -->


<?php get_footer();
