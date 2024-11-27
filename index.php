<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="メインビジュアルの写真">
  </div>

  <section id="about" class="wrapper">
    <h2 class="section-title">About</h2>
    <div class="content">
      <img src="<?php echo esc_url(get_theme_file_uri('img/about.jpg')); ?>" alt="アイコンの写真">
      <div class="text">
        <h3 class="content-title">HARUTO ISHIDA</h3>
        <p>
          2004年生まれ、20歳、サッカー指導者<br>
          指導歴：地元少年団指導6年、中学校外部指導2年<br>
          誇れるサッカー環境を創るために奮闘中
        </p>
      </div>
    </div>
  </section>

  <section id="hobby" class="wrapper">
    <h2 class="section-title">Hobby</h2>
    <?php if (have_posts()): ?>
      <ul>
        <?php while (have_posts()):the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              <h3 class="content-title"><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>