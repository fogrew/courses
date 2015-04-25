$(function() {
  // navbar scroll smoth
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('#' + this.hash.slice(1));
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });

  // affix and parallax
  var fixed    = 0,
      scrolled = 0,
      features = 0,
      navbar   = $('.navbar').height();
  $(window).on('scroll', function() {
    scrolled = $(window).scrollTop();
    features = $('.features').offset().top;
    if (features < scrolled + navbar && fixed == 0) {
      $('.navbar').addClass('navbar_fixed');
      fixed = 1;
    }
    if (features > scrolled + navbar && fixed == 1) {
      $('.navbar').removeClass('navbar_fixed');
      fixed = 0;
    }
    if(scrolled < features) {
      $('.hero').css('background-position-y', -(scrolled * 0.35) + 'px');
    }
  });

  // tabs
	$('.tabs').on('click', '.tabs__tab:not(.tabs__tab_active)', function() {  
	    $(this).addClass('tabs__tab_active').siblings().removeClass('tabs__tab_active')  
	    .parents('.container').find('.tabs-content').find('.tabs-content__tacontent').eq($(this).index()).addClass('tabs-content__tacontent_active').siblings('.tabs-content__tacontent').removeClass('tabs-content__tacontent_active');  
  });

  $('.calc__select').on('change', function(e){
    $('.calc__value-image').attr('src','i/calc/'+$(this).val()+'.png');
    $('.calc__value-text').text($(this).find('option:selected').data('price'));
  });

  $('.fotorama').on('fotorama:ready', function (e, fotorama) {
    $(".fancybox").fancybox({
      padding: 0,
      margin: [20, 60, 20, 60],
      keys: {
        next : {
          13 : 'left', // enter
          34 : 'up',   // page down
          39 : 'left', // right arrow
          40 : 'up'    // down arrow
        },
        prev : {
          8  : 'right',  // backspace
          33 : 'down',   // page up
          37 : 'right',  // left arrow
          38 : 'down'    // up arrow
        },
        close  : [27], // escape key
        play   : [32], // space - start/stop slideshow
        toggle : [70]  // letter "f" - toggle fullscreen
      },
      helpers:  {
        title : {
          type : 'outside',
          position: 'top'
        },
        overlay : {
          showEarly : false
        }
      }
    });
  });

  $('.owl-carousel').owlCarousel({
    items:6,
    lazyLoad:true,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
  });

  $('.accordion').on('click','.accordion__title', function() {
    $(this).toggleClass('accordion__title_opened').next().slideToggle();
  });

  $(".various").fancybox({
    maxWidth    : 800,
    maxHeight   : 600,
    fitToView   : false,
    width       : '70%',
    height      : '70%',
    autoSize    : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });

  // load more program
  $('.load-more__button').on('click', function() {
    var txt = $(".program__marks_hidden").length ? 'Скрыть' : 'Посмотреть ещё';
    $(this).text(txt).parent().prev().toggleClass('program__marks_hidden');
  });

  $('.prespoiler').on('click', function() {
    $('.spoiler').slideToggle();
  });

  // validate and submit forms
  $('.form').each(function(){
    $(this).submit(function(){
      var form = $(this),
        formId = form.attr('id'),
        name = '-',
        email = 'seo@ipkp.ru',
        phone = '-',
        message = 'Произошла отправка формы ' + formId,
        nameField = form.find('input[name=name]'),
        phoneField = form.find('input[name=tel]'),
        emailField = form.find('input[name=email]'),
        messageField = form.find('textarea[name=message]'),
        errors = 0;

      if (nameField.length) name = nameField.val();
      if (emailField.length) email = emailField.val();
      if (phoneField.length) phone = phoneField.val();
      if (messageField.length) message += '\n' + messageField.val();

      if (errors === 0) {
        $.ajax({
          type: 'POST',
          url: 'inc/core/engine/form.php',
          dataType: 'json',
          data: {
            action: 'sendContact',
            name: name,
            email: email,
            phone: phone,
            message: message
          },
          success: function(data){
            if (data.success){
              form.find('.form__title').text("Вы супер! Скоро мы с вами свяжемся.");
              if (nameField.length) {
                nameField.val('').removeClass('text_error');
                $('label[for='+nameField.attr('id')+']').removeClass('label_error');
              }
              if (phoneField.length) {
                phoneField.val('').removeClass('text_error');
                $('label[for='+phoneField.attr('id')+']').removeClass('label_error');
              }
              if (emailField.length) {
                emailField.val('').removeClass('text_error');
                $('label[for='+emailField.attr('id')+']').removeClass('label_error');
              }
              if (messageField.length) {
                messageField.val('').removeClass('textarea_error');
                $('label[for='+messageField.attr('id')+']').removeClass('label_error');
              }

            } else {
              if (data.errors.name !== '' && data.errors.name !== undefined) {
                nameField.addClass('text_error');
                $('label[for='+nameField.attr('id')+']').addClass('label_error').text(data.errors.name);
              }
              if (data.errors.phone !== '' && data.errors.phone !== undefined) {
                phoneField.addClass('text_error');
                $('label[for='+phoneField.attr('id')+']').addClass('label_error').text(data.errors.phone);
              }
              if (data.errors.email !== '' && data.errors.email !== undefined) {
                emailField.addClass('text_error');
                $('label[for='+emailField.attr('id')+']').addClass('label_error').text(data.errors.email);
              }
              if (data.errors.message !== '' && data.errors.message !== undefined) {
                messageField.addClass('textarea_error');
                $('label[for='+messageField.attr('id')+']').addClass('label_error').text(data.errors.message);
              }

              if (data.errors.sending !== '' && data.errors.sending !== undefined) {
                form.find('.form__title').text("Извините, произошла ошибка при отправке сообщения. Напишите на адрес seo@ipkp.ru или позвоните по номеру (812) 915-83-13");
              }
            }
          },
          error: function(){
            form.find('.form__title').text("Извините, произошла ошибка при отправке сообщения. Напишите на адрес seo@ipkp.ru или позвоните по номеру (812) 915-83-13");
          }
        });
      }
      return false;
    });
  });

  if($('#map-view').length) {
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map-view', {
                center: [59.956503, 30.320698],
                zoom: 17
            }),
            myPlacemark = new ymaps.Placemark([59.95603, 30.322983], 0, {
                iconLayout: 'default#image',
                iconImageHref: 'i/map.svg',
                iconImageSize: [38, 55],
                iconImageOffset: [-48, -48]
            });
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
    });
  }
});