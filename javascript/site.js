var swiper_init = function () {
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: true,
    loop: true,
    preloadImages: false,
    updateOnImagesReady: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
    },
  })
}

var nav_link_active = function () {
  var id_active = sessionStorage.getItem('id')
  if (!id_active) {
    id_active = 'index'
  }
  $('#' + id_active).addClass('is-active')
  $('.nav>li>a').on('click', function () {
    var id = $(this).attr('id')
    sessionStorage.setItem('id', id)
    window.location.href = $(this).data('href')
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
      $('.scroll-up').fadeIn()
    } else {
      $('.scroll-up').fadeOut()
    }
  })
}

var search_modal = function () {
  $('.icon-search').click(function () {
    $('.top-menu').animate({opacity: '0'})
    $('.icon-search').animate({opacity: '0'})
    $('.modal').delay(400).fadeIn()
    $('body').addClass('no-scroll')
  })

  $('.close').click(function () {
    $('.modal').fadeOut()
    $('.top-menu').delay(400).animate({opacity: '1'})
    $('.icon-search').delay(400).animate({opacity: '1'})
    $('body').removeClass('no-scroll')
  })

  $('.input').keydown(function () {
    if (event.keyCode == "13") {
      var url = $(this).data('search') + $(this).val()
      window.location.href = url
    }
  })
}

$(function () {
  swiper_init()
  nav_link_active()
  nav_scroll(".nav-animated", "is-scroll")
  search_modal()
})
