<?php get_header(); ?>

<header style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background1.png');">

  <div class="header-text">
    <h1>世界にひとつだけの、特別な一着。</h1>
    <p class="special-text">
      愛犬の個性を引き出すために、あなたの大切なパートナーにぴったり合う洋服をお作りします。<br>
      ミックス犬や特別な体型のワンちゃんでも、既製品では叶えられないジャストフィットのデザインを。<br>
      さらに、お子様が着なくなった制服をリメイクし、大切な思い出をワンちゃんの洋服として生まれ変わらせます。<br>
      愛犬と家族の絆を感じられる、世界にひとつだけの一着をお届けします。
    </p>
  </div>
</header>

  <!-- 作品ギャラリー -->
  <section id="works">
  <h2>Product</h2>
  <div class="gallery-container">
    <div class="gallery-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpeg" alt="作品1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image2.jpeg" alt="作品2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image3.jpeg" alt="作品3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image4.jpeg" alt="作品4">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image5.jpeg" alt="作品5">
    </div>
  </div>
</section>

  <!-- 愛犬への想い -->
  <section id="about">
    <h2>愛犬への想い</h2>
    <div class="profile-box">
    <img src="<?php echo get_template_directory_uri(); ?>/img/prof.jpg" alt="犬服コレクション">
      <div class="text-box">
        <h3>ファッションは自由。愛犬にも、個性を楽しむ時間を。</h3>
        <p>浴衣で華やかに夏を楽しみ、制服スタイルで青春気分を味わい、冷感素材でひんやり快適な季節を過ごす。<br>
        どんなシーンでも、おしゃれで心地よい一着が、愛犬の日常に特別な彩りを添えます。</p>
        <p><strong>一針一針に想いを込めて、大切なあなたの愛犬へ。</strong><br>
        愛犬がもっと快適に、もっとかわいく、もっと楽しく過ごせるように。<br>
        あなたと愛犬のかけがえのない時間を、ぬくもりあふれる一着で包み込みます。</p>
      </div>
    </div>
  </section>

  <!-- お問い合わせ -->
  <section id="contact">
    <h2>お問い合わせ</h2>
    <form action="submit_form.php" method="post">
      <label for="name">お名前：</label>
      <input type="text" id="name" name="name" required>

      <label for="email">メールアドレス：</label>
      <input type="email" id="email" name="email" required>

      <label for="message">お問い合わせ内容：</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">送信</button>
    </form>
  </section>
  
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

<?php get_footer(); ?>


