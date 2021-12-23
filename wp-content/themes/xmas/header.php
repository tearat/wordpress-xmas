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
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Логотип Ёлки палки"
              class="header-logo">
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