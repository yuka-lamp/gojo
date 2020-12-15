<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<footer class="footer pt-5">
  <div class="footer__contact position-relative">
    <div class="footer__contact__bg"></div>
    <div class="footer__contact__inner bg-primary p-5">
      <div class="row align-items-center">
        <h2 class="m-0 col-sm-3 text-white">Contact</h2>
        <p class="m-0 col-sm-6 text-white">当グループへのご質問、ご要望は電話またはメールにて<br>お気軽にお問い合わせください。</p>
        <div class="footer__contact-arrow col-sm-3"><img src="<?php echo $wp_url ?>/dist/images/footer_arrow.png" alt="矢印" srcset="<?php echo $wp_url ?>/dist/images/footer_arrow.png 1x, <?php echo $wp_url ?>/dist/images/footer_arrow@2x.png 2x"></div>
      </div>
    </div>
  </div>
  <div class="footer__main bg-success pb-5">
    <div class="d-md-flex justify-content-between align-items-end">
      <div class="footer__main__info">
        <h3 class="footer__main__info-name">五條市地域商社</h3>
        <p class="m-0">〒637-0417　奈良県五條市大塔町阪本225-6
          <br>TEL：<a href="tel:0747-35-0311">0747-35-0311</a>
        </p>
      </div>
      <div class="">
        <ul class="list-unstyled">
          <li class="d-inline">
            <a class="text-uppercase text-body" href="<?php echo $home ?>">top</a>
          </li>
          <li class="d-inline ml-4">
            <a class="text-uppercase text-primary" href="<?php echo $home ?>/concept/">concept</a>
          </li>
          <li class="d-inline ml-4">
            <a class="text-uppercase text-primary" href="<?php echo $home ?>/service/">service</a>
          </li>
          <li class="d-inline ml-4">
            <a class="text-uppercase text-primary" href="<?php echo $home ?>/company/">company</a>
          </li>
          <li class="d-inline ml-4">
            <a class="text-uppercase text-primary" href="<?php echo $home ?>/tour/">tour</a>
          </li>
          <li class="d-inline ml-4">
            <a class="text-uppercase text-primary" href="<?php echo $home ?>/blog/">blog</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="d-md-flex justify-content-between align-items-end mt-5">
      <ul class="list-unstyled">
        <li class="d-inline">
          <a class="small text-info" href="<?php echo $home ?>/contact/">お問い合わせ</a>
        </li>
        <li class="d-inline">
          <a class="small text-info" href="<?php echo $home ?>/tarm/">利用規約</a>
        </li>
        <li class="d-inline">
          <a class="small text-info" href="<?php echo $home ?>/privacy-policy">プライバシーポリシー</a>
        </li>
      </ul>
      <p class="text-info small">Copyright© 2020 五條市地域商社 All Rights Reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
