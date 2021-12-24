$(document).ready(function () {
  const treesSlider = new Swiper(".trees-slider", {
    // параметры слайдера
    loop: true,
    slidesPerView: 6,

    // Подключаем стрелки
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },

    // настройки адаптивной версии
    breakpoints: {
      // если браузер >= 320px
      320: {
        slidesPerView: 2,
      },
      // если браузер >= 480px
      480: {
        slidesPerView: 3,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 6,
      },
    },
  })

  const reviewsSlider = new Swiper(".reviews-slider", {
    // параметры слайдера
    loop: true,
    slidesPerView: 1,

    // Подключаем стрелки
    navigation: {
      nextEl: ".swiper-button-next-2",
      prevEl: ".swiper-button-prev-2",
    },
  })

  // счетчики
  const counterButtonPlus = $(".counter-button-plus")
  const counterButtonMinus = $(".counter-button-minus")

  counterButtonPlus.on("click", function (event) {
    event.preventDefault()
    const countInput = $(this).parent().find("input")
    let counter = countInput.val()
    if (counter < 10) {
      counter++
      countInput.val(counter)
    }
  })

  counterButtonMinus.on("click", function (event) {
    event.preventDefault()
    const countInput = $(this).parent().find("input")
    let counter = countInput.val()
    if (counter > 1) {
      counter--
      countInput.val(counter)
    }
  })

  $(".card").on("submit", function (event) {
    event.preventDefault()
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        $.fancybox.open(res)
      },
      error: function (err) {
        console.log(err)
      },
    })
  })

  $("#modal-form").on("submit", function (event) {
    event.preventDefault()
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        $.fancybox.close()
        $.fancybox.open(res)
        $("#modal-form .modal-input").val("")
      },
      error: function (err) {
        console.log(err)
      },
    })
  })
})
