<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ メッセージ -->
<section class="company__message">
  <div class="container">
    <div class="main-ttl mb-5">
      <h2 class="text-secondary font-weight-bold">message<span class="text-primary ml-4">代表からのメッセージ</span></h2>
    </div>
    <div class="d-block d-flex align-items-center">
      <div class="col-12 col-md-7">
        <h2 class="mt-5 mb-5">地域の魅力を次世代に引き継ぐ</h2>
        <p class="d-block text-left lh-l">
          私たちのまちでは、近所を普通に歩くだけで数百年の歴史の欠片にいつでも出会うことができますが、それはこのまちの人々が歴史を重んじ、日常の中で伝統や文化を大切に受け継いでこられたからに他ならず、とても尊く、美しい感覚だといつも感じています。そして現在を生きる私たちは、この感覚を次世代に引き継ぐ使命を負っているのだと、強く想います。
          <br>今、様々なことが加速度的に変わりゆく時代の中にいて、このまちの変わらない魅力は、市民の皆さまやここを訪れる人々に懐かしさと安らぎを与えてくれますが、これからの新たな時代を生き抜くために、私たちは行政と民間が互いの強みを持ち寄り、いくつかの変化を興そうとしています。
          <br>そして、この変化は時代のスパイスとして、きっとこのまちに驚きと輝きを与えてくれると確信しています。
          <br>代表取締役　宮倉　靖幸
        </p>
      </div>
      <!-- ▼ 画像 -->
      <div class="d-block d-md-flex col-12 col-md-5 mt-5">
        <img class="w-100" src="<?php echo $wp_url ?>/dist/images/company_msg_1.png" alt="五條市地域商社の写真" srcset="<?php echo $wp_url ?>/dist/images/company_msg_1.png 1x, <?php echo $wp_url ?>/dist/images/company_msg_1@2x.png 2x">
      </div>
      <!-- ▲ 画像 -->
    </div>
  </div>
</section>
<!-- ▲ メッセージ -->

<!-- ▼ 会社情報 -->
<section class="company__profile sec-t">
  <div class="container">
    <div class="main-ttl mb-5">
      <h2 class="text-secondary font-weight-bold">profile<span class="text-primary ml-4">会社情報</span></h2>
    </div>
    <!-- ▼ テーブル -->
    <table class="row">
      <tbody class="col-12 col-md-6">
        <tr>
          <th class="font-weight-bold">会社名</th>
          <td>五條市地域商社 株式会社</td>
        </tr>
        <tr>
          <th class="font-weight-bold">所在地</th>
          <td>
            〒637-0417
            <br>奈良県五條市大塔町阪本249
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.4187752330918!2d135.72979401521937!3d34.21232408056262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6006dd18eca3bbaf%3A0x9e3e997506b048!2z44CSNjM3LTA0MTcg5aWI6Imv55yM5LqU5qKd5biC5aSn5aGU55S66Ziq5pys77yS77yU77yZ!5e0!3m2!1sja!2sjp!4v1610953032850!5m2!1sja!2sjp" width="100%" height="137px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-3"></iframe>
          </iframe>
          </td>
        </tr>
        <tr>
          <th class="font-weight-bold">TEL</th>
          <td>0747-35-0321（ロッジ星のくに内）</td>
        </tr>
      </tbody>
      <tbody class="col-12 col-md-6">
        <tr>
          <th class="font-weight-bold">代表者名</th>
          <td>宮倉 靖幸</td>
        </tr>
        <tr>
          <th class="font-weight-bold">設立</th>
          <td>2020年4月1日</td>
        </tr>
        <tr>
          <th class="font-weight-bold">資本金</th>
          <td>5,000,000円</td>
        </tr>
        <tr>
          <th class="font-weight-bold">従業員</th>
          <td>五條市地域商社 株式会社</td>
        </tr>
      </tbody>
    </table>
    <!-- ▲ テーブル -->
  </div>
</section>
<!-- ▲ 会社情報 -->

<!-- ▼ 認定マークについて -->
<section class="company__mark sec-t">
  <div class="container">
    <div class="main-ttl mb-5">
      <h2 class="text-secondary font-weight-bold">mark<span class="text-primary ml-4">認定マークについて</span></h2>
    </div>
    <!-- ▼ コンテンツ -->
    <div class="company__mark-content d-flex flex-wrap justify-content-between mt-5">
      <div class="company__mark-text">
        <h2 class="mt-3 mb-4">地域ブランドの確立を目指して</h2>
        <p class="d-block text-left lh-l m-0">五條市認定マークを設け、五條市が誇る特産品などに付与することで、地域ブランドとしての信用・信頼を蓄積し、五條市全体のブランド力強化を目指しています。
          <br>ベースデザインは旧大塔村の村章をリメイクし、市の花である桔梗を中央に配し、周囲には特産品「柿」の葉を並べました。</p>
      </div>
      <div class="company__mark-img">
        <img src="<?php echo $wp_url ?>/dist/images/company_mark.png" alt="" srcset="<?php echo $wp_url ?>/dist/images/company_mark.png 1x, <?php echo $wp_url ?>/dist/images/company_mark@2x.png 2x">
      </div>
    </div>
    <!-- ▲ コンテンツ -->
  </div>
</section>
<!-- ▲ 認定マークについて -->

<!-- ▼ メンバー紹介 -->
<section class="company__member sec-t">
  <div class="container">
    <div class="main-ttl mb-4">
      <h2 class="text-secondary font-weight-bold">member<span class="text-primary ml-4">メンバー紹介</span></h2>
    </div>
    <p class="d-block text-left lh-l pb-4">五條市地域商社株式会社は、五條市内に点在する魅力や課題を整理し、有機的に繋ぎ合わせるプラットフォームとして官民連携で地域に新たな魅力と価値を創造します。<br>五條市にある生産物、観光、人材などの魅力的な資源全てを取り扱い、商社としてPRし活性化を行うことで、</p>
    <!-- ▼ 一覧 -->
    <div class="d-flex flex-wrap">
      <?php query_posts( array(
        'post_type' => 'member', //カスタム投稿名を指定
        'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
      ));
      $id = get_the_ID();
      ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <!-- ▼ ループするコンテンツ -->
      <div class="company__member__item">
        <!-- ▼ 写真 -->
        <div class="company__member__item-img mb-3">
          <?php if( get_field('photo')):  // 画像がある場合 ?>
            <img class="w-100" src="<?php echo the_field('photo'); ?>" alt="<?php the_title(); ?>">
          <?php else: // 画像がない場合 ?>
            <img class="w-100" src="<?php echo $wp_url ?>/dist/images/company_member_imgnone.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url ?>/dist/images/company_member_imgnone.png 1x, <?php echo $wp_url ?>/dist/images/company_member_imgnone@2x.png 2x">
          <?php endif; ?>
        </div>
        <!-- ▲ 写真 -->
        <!-- ▼ テキスト -->
        <div class="company__member__item-txt">
          <p class="d-block  f-12 mb-1"><?php echo the_field('position'); ?></p>
          <h3 class="d-block f-15 font-weight-bold mb-1"><?php the_title(); ?></h3>
          <p class="company__member__item-en d-block f-12 text-uppercase font-weight-bold text-info"><?php echo the_field('name-en'); ?></p>
        </div>
        <!-- ▲ テキスト -->
      </div>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <!-- ▲ 一覧 -->
  </div>
</section>
<!-- ▲ メンバー紹介 -->

<?php get_footer();
