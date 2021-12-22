<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ёлки-палки — магазин ёлок</title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-3 col-md-3 mb-3 mb-md-0">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Логотип Ёлки палки" class="header-logo">
          </a>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-6 col-md-4 mb-3 mb-md-0">
          <span class="header-description">
            Магазин <br>ёлок с доставкой <br>по всей <span class="text-color-green">России</span>
          </span>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-3 col-md-5 header-contacts">
          <a href="tel:+78006548745" class="header-phone">8 (800) 654-87-45</a>
          <span class="header-info">Звонок по России бесплатный</span>
          <a data-fancybox data-src="#modal" href="javascript:;" class="callback">Заказать звонок</a>
        </div>
        <!-- /.col-lg-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </header>

  <section class="hero">
    <div class="container">
      <h1 class="hero-title">Красивые ёлки и новогодние игрушки Ёлки-палки</h1>
      <p class="hero-description">первая в россии эксклюзивная доставка ёлок и игрушек для людей, которые ждут <b>новый год</b></p>

      <!-- Слайдер с цветами -->
      <div class="swiper-container trees-slider">
        <!-- Обертка слайдов -->
        <div class="swiper-wrapper">
          <!-- Слайды -->
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-1.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-2.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-3.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-4.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-5.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-6.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-3.png" alt="tree" class="slide-image">
          </div>
        </div>

        <!-- Стрелки слайдера -->
        <div class="swiper-button-prev swiper-button-prev-1"></div>
        <div class="swiper-button-next swiper-button-next-1"></div>
      </div>
      <!-- ./swiper-container -->

      <span class="hero-cta">Закажите ёлку со скидкой 10%</span>

      <a data-fancybox data-src="#alert" href="javascript:;" class="button">Заказать ёлку</a>
      
    </div>
    <!-- /.container -->
  </section>

  <section class="reviews">
    <div class="container">
      <h2 class="section-title">Мы доставляем только лучшие ёлки</h2>

      <!-- Слайдер с отзывами -->
      <div class="swiper-container reviews-slider">
        <!-- обертка слайдов -->
        <div class="swiper-wrapper">
          <!-- слайды -->
          <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
            <div class="review-image d-flex align-items-center justify-content-center flex-column">
              <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review-1.png" alt="review">
              <span class="review-name">Дарья Макеева</span>
              <span class="review-city">г. Санкт-Петербург</span>
            </div>
            <div class="review-text">
              <p class="review">
                Я очень довольна таким отношением к делу. Обслужили просто превосходно, я заказывала по телефону — так подробно мне всё объяснили, помогли выбрать ёлку для моей квартиры, и доставили домой, она очень понравилась, спасибо вам огромное.
              </p>
              <!-- <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии ёлки</a> -->
            </div>
          </div>
          <!-- ./swiper-slide -->
          <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
            <div class="review-image d-flex align-items-center justify-content-center flex-column">
              <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review-1.png" alt="review">
              <span class="review-name">Дарья Макеева</span>
              <span class="review-city">г. Санкт-Петербург</span>
            </div>
            <div class="review-text">
              <p class="review">
                Я очень довольна таким отношением к делу. Обслужили просто превосходно, я заказывала по телефону — так подробно мне всё объяснили, помогли выбрать ёлку для моей квартиры, и доставили домой, она очень понравилась, спасибо вам огромное.
              </p>
              <!-- <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии ёлки</a> -->
            </div>
          </div>
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
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/advantages/advantages-1.png" alt="Доставляем ёлки прямо до дверей квартиры" class="advantages-image">
          </div>
          <!-- /.advantage-wrapper -->
          <h3 class="advantages-title">Доставляем ёлки прямо до дверей квартиры</h3>
        </div>
        <!-- /.col -->
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/advantages/advantages-2.png" alt="Игрушки выполнены качественно и ваш кот их не разобьет" class="advantages-image">
          </div>
          <!-- /.advantages-wrapper -->
          <h3 class="advantages-title">Игрушки выполнены качественно и ваш кот их не разобьет</h3>
        </div>
        <!-- /.col -->
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/advantages/advantages-3.png" alt="Мы являемся первыми на рынке и всегда рады помочь с выбором ёлки" class="advantages-image">
          </div>
          <!-- /.advantages-wrapper -->
          <h3 class="advantages-title">Мы являемся первыми на рынке и всегда рады помочь с выбором ёлки</h3>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  
  <section class="goods">
    <div class="container">
      <h2 class="section-title">Наряди свою ёлку <span>прямо сейчас!</span></h2>
      <p class="section-description">Выберите желаемые игрушки и наши ребята красиво оформят и доставят ёлку прямо до дверей вашей квартиры!</p>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/toy-1.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="toy-white"></label>
              <input class="color-input" type="radio" name="color" id="toy-white" value="white">
              
              <label class="color-label yellow" for="toy-yellow"></label>
              <input class="color-input" type="radio" name="color" id="toy-yellow" value="yellow">

              <label class="color-label green" for="toy-green"></label>
              <input class="color-input" type="radio" name="color" id="toy-green" value="green">

              <label class="color-label red" for="toy-red"></label>
              <input class="color-input" type="radio" name="color" id="toy-red" value="red">

              <label class="color-label blue" for="toy-blue"></label>
              <input class="color-input" type="radio" name="color" id="toy-blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-1.png" alt="tree" class="card-image">
            <h3 class="card-title">Живая ёлка</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/toy-2.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-3.png" alt="tree" class="card-image">
            <h3 class="card-title">Искусственная ёлка</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/toy-4.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/tree-5.png" alt="tree" class="card-image">
            <h3 class="card-title">Ёлочка в горшке</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/toy-2.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/trees/toy-3.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->
      </div>
      <!-- /.row -->

      <!-- <a href="#" class="more">Все товары</a> -->
      
    </div>
    <!-- /.container -->
  </section>

  <section class="offer">
    <div class="container">
      <h2 class="section-title offer-title">Остались вопросы?</h2>
      <a data-fancybox data-src="#modal" href="javascript:;" class="offer-link">Закажите звонок нашего специалиста!</a>
      <span class="offer-label">или позвоните по телефону</span>
      <a href="tel:+78006548745" class="offer-phone">8 (800) 654-87-45</a>
    </div>
    <!-- /.container -->
  </section>

  <footer class="footer">
    <div class="container footer-bg">
      <div class="row py-5">
        <div class="col-md-6 mb-5 mb-md-0">
          <nav>
            <ul class="footer-menu d-flex">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Доставка</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Оплата</a>
              </li>
            </ul>
          </nav>
          <div class="social">
            Присоединяйтесь к нам: 
            <a href="https://vk.com/" class="social-link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/vk.png" alt="vk">
            </a>
          </div>
          <!-- /.social -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6 footer-info">
          <span class="footer-label">Отдел обслуживания клиентов</span>
          <a href="tel:+78006548745" class="footer-phone">8 (800) 654-87-45</a>
          <span class="footer-label">Ежедневно, круглосуточно.</span>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </footer>

  <div class="modal" id="modal">
    <h2 class="modal-title">Закажите обратный звонок</h2>
    <form action="#">
      <input type="tel" class="modal-input" placeholder="+7 (___) __-__-___">
      <button class="button modal-button">Перезвоните мне</button>
    </form>
  </div>

  <div class="modal" id="alert">
    <h2 class="modal-title">Это демо-сайт</h2>
    <p class="modal-text">Некоторые функции этого сайта не работают. Я делаю ту часть, которая видна пользователю. Если сайт нужно сделать с серверной частью, я работаю в паре с бэкенд-разработчиком</p>
    <button class="button modal-button">Понятно</button>
  </div>

  <?php wp_footer(); ?>
</body>
</html>