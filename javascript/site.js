var swiper_init = function () {
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: 5000,
    prevButton: '.swiper-button-prev',
    nextButton: '.swiper-button-next',
    loop: true,
    preloadImages: false,
    updateOnImagesReady: true

  })
}

var modal = function (id) {
  $(id).modal({
    backdrop: true,
    keyboard: true
  })

  $(window).on('shown.bs.modal', function () {
    $('body').addClass('no-scroll')
  })

  $(window).on('hidden.bs.modal', function () {
    $('body').removeClass('no-scroll')
  })
}

var nav_link_active = function () {
  var id_active = sessionStorage.getItem('id')
  if (!id_active) {
    id_active = 'index'
  }
  console.log($(id_active))
  $('#' + id_active).addClass('is-active')
  $('.nav').on('click', 'li', function () {
    var id = $(this).attr('id')
    sessionStorage.setItem('id', id)

  })
}

var nav_scroll = function (item, class_name) {
  $(window).scroll(function () {
    var $animated = $(item)
    if ($animated.length && $animated.offset().top > 2) {
      $animated.addClass(class_name)
    } else {
      $animated.removeClass(class_name)
    }
    if ($(this).scrollTop() > 200) {
      $('.scroll-up').fadeIn();
    } else {
      $('.scroll-up').fadeOut();
    }
  })
}


$(function () {
  swiper_init()
  nav_link_active()
  nav_scroll(".nav-animated", "is-scroll")
  $('.icon-search').click(function () {
    modal('#myModal')
  })
})
