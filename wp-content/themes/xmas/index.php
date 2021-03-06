<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1 class="hero-title">
      <?php the_field('main_title') ?>
    </h1>
    <p class="hero-description">
      <?php the_field('main_subtitle') ?>
    </p>

    <!-- Слайдер с цветами -->
    <div class="swiper-container trees-slider">
      <!-- Обертка слайдов -->
      <div class="swiper-wrapper">
        <!-- Слайды -->
        <?php 
        // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts'   => 7,
            'category_name' => 'trees',
            'orderby'       => 'date',
            'order'         => 'ASC',
            'post_type'     => 'post',
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
              <div class="swiper-slide">
                <img src="<?php the_field('product_image') ?>" alt="tree" class="slide-image">
              </div>
            <?php
          }

          wp_reset_postdata(); // сброс
        ?>
      </div>

      <!-- Стрелки слайдера -->
      <div class="swiper-button-prev swiper-button-prev-1"></div>
      <div class="swiper-button-next swiper-button-next-1"></div>
    </div>
    <!-- ./swiper-container -->

    <span class="hero-cta"><?php the_field('main_action') ?></span>

    <a data-fancybox data-src="#alert" href="javascript:;" class="button"><?php the_field('main_button') ?></a>

  </div>
  <!-- /.container -->
</section>

<section class="reviews">
  <div class="container">
    <h2 class="section-title"><?php the_field('main_reviews_title') ?></h2>

    <!-- Слайдер с отзывами -->
    <div class="swiper-container reviews-slider">
      <!-- обертка слайдов -->
      <div class="swiper-wrapper">
        <!-- слайды -->
        <?php
          global $post;
          $myposts = get_posts([ 
            'numberposts' => 5,
            'post_type'   => 'reviews',
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
                <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
                  <div class="review-image d-flex align-items-center justify-content-center flex-column">
                    <img src="<?php the_field('review_image') ?>" alt="review">
                    <span class="review-name"><?php the_title() ?></span>
                    <span class="review-city"><?php the_field('review_city') ?></span>
                  </div>
                  <div class="review-text">
                    <p class="review">
                      <?php the_content() ?>
                    </p>
                    <!-- <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии ёлки</a> -->
                  </div>
                </div>
              <?php 
            }
          } else {
            // Постов не найдено
          }

          wp_reset_postdata(); // Сбрасываем $post
        ?>
        <!-- ./swiper-slide -->
      </div>
      <!-- ./swiper-wrapper -->

      <!-- If we need navigation buttons -->
      <a class="swiper-button-prev swiper-button-prev-2"></a>
      <a class="swiper-button-next swiper-button-next-2"></a>

    </div>
    <!-- ./swiper-container -->

  </div>
  <!-- /.container -->
</section>

<section class="advantages">
  <div class="container">
    <div class="row">
    <?php
      global $post;
      $myposts = get_posts([ 
        'numberposts' => 5, 
        'post_type'=> 'advantages', 
        'order' => 'asc' 
      ]);

      if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post );
          ?>
            <div class="col-md-4 mb-5 mb-md-0">
              <div class="advantages-wrapper">
                <img src="<?php the_field('advantage_image') ?>"
                  alt="<?php the_title() ?>" class="advantages-image">
              </div>
              <h3 class="advantages-title"><?php the_title() ?></h3>
            </div>
          <?php 
        }
      }
      wp_reset_postdata(); // Сбрасываем $post
    ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<section class="goods">
  <div class="container">
    <h2 class="section-title"><?php the_field('main_goods_title') ?></h2>
    <p class="section-description"><?php the_field('main_goods_description') ?></p>

    <div class="row">

    <?php 
    // параметры по умолчанию
      $my_posts = get_posts( array(
        'numberposts'   => 12,
        'post_type'     => 'post',
      ) );

      foreach( $my_posts as $post ){
        setup_postdata( $post );
        $selectId = $post->ID . "_select";
        ?>
          <div class="col-lg-3 col-md-6">
            <form class="card" action="<?php echo admin_url('admin-ajax.php') ?>" method="post">
              <input type="hidden" name="action" value="send_product">
              <input type="hidden" name="product" value="<?php the_title() ?>">
              <img src="<?php the_field('product_image') ?>" alt="toy" class="card-image">
              <h3 class="card-title"><?php the_title() ?></h3>
              <span class="card-label">Выберите цвет:</span>

              <div class="colors d-flex align-items-center justify-content-center">
                <label for="<?php echo $selectId; ?>"></label>
                <select class="color-select" name="color" id="<?php echo $selectId; ?>">
                <?php 
                  $colors = get_field('product_colors');
                  foreach($colors as $key => $color) {
                    $checked = ($key == 0) ? 'checked' : '';
                    $id = $post->ID . "_" . $color['value'];
                    ?>
                      <option value="<?php echo $color['label'] ?>"><?php echo $color['label'] ?></option>
                      <!-- <label class="color-label <?php echo $color['value']; ?>" for="<?php echo $id; ?>">
                        <input class="color-input" type="radio" name="color" id="<?php echo $id; ?>" <?php echo $checked; ?> value="<?php echo $color['label'] ?>">
                      </label> -->
                    <?php
                  }
                ?>
                </select>
              </div>
              <!-- /.colors -->

              <span class="card-label">Количество:</span>

              <div class="counter-group d-flex justify-content-center align-items-center">
                <button class="counter-button counter-button-minus">-</button>
                <input name="count" type="text" class="counter-input" value="1">
                <button class="counter-button counter-button-plus">+</button>
              </div>
              <!-- /.counter-group -->

              <button type="submit" class="button card-button">Заказать</button>

            </form>
            <!-- /.card -->
          </div>
          <!-- /.col-lg-3 col-md-6 -->
        <?php
      }
      wp_reset_postdata(); // сброс
    ?>
    </div>
    <!-- /.row -->

    <!-- <a href="#" class="more">Все товары</a> -->

  </div>
  <!-- /.container -->
</section>

<section class="offer">
  <div class="container">
    <h2 class="section-title offer-title"><?php the_field('main_offer_title') ?></h2>
    <a data-fancybox data-src="#modal" href="javascript:;" class="offer-link"><?php the_field('main_offer_action') ?></a>
    <span class="offer-label"><?php the_field('main_offer_action2') ?></span>
    <a href="tel:+78006548745" class="offer-phone"><?php the_field('phone') ?></a>
  </div>
  <!-- /.container -->
</section>

<?php get_footer(); ?>