$(function() {
  // navbar scroll smoth
  $('.navbar a[href*=#]:not([href=#])').click(function() {
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

  $('.load-more__button').on('click', function() {
    var txt = $(".program__marks_hidden").length ? 'Скрыть' : 'Посмотреть ещё';
    $(this).text(txt).parent().prev().toggleClass('program__marks_hidden');
  });

  $('.form').each(function(){

    $(this).submit(function(){
      var form = $(this),
        name = '-',
        email = '-',
        phone = '-',
        message = '-',
        formId = form.attr('id'),
        nameField = form.find('input[name=name]'),
        phoneField = form.find('input[name=tel]'),
        emailField = form.find('input[name=email]'),
        messageField = form.find('textarea[name=message]'),
        errors = 0;

      if (nameField.length) {
        name = nameField.val();
      }

      if (emailField.length) {
        email = emailField.val();
      }

      if (phoneField.length) {
        phone = phoneField.val();
      }

      if (messageField.length) {
        message = 'Произошла отправка формы ' + formId + '. <br>' + messageField.val();
      }

      console.log(nameField.length, emailField.length, phoneField.length, messageField.length, errors);

      if (errors === 0){
        $.ajax({
          type: 'POST',
          url: 'send_contact.php',
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
                console.log(data.errors.name);
              }
              if (data.errors.phone !== '' && data.errors.phone !== undefined) {
                phoneField.addClass('text_error');
                $('label[for='+phoneField.attr('id')+']').addClass('label_error').text(data.errors.phone);
                console.log(data.errors.phone);
              }
              if (data.errors.email !== '' && data.errors.email !== undefined) {
                emailField.addClass('text_error');
                $('label[for='+emailField.attr('id')+']').addClass('label_error').text(data.errors.email);
                console.log(data.errors.email);
              }
              if (data.errors.message !== '' && data.errors.message !== undefined) {
                messageField.addClass('textarea_error');
                $('label[for='+messageField.attr('id')+']').addClass('label_error').text(data.errors.message);
                console.log(data.errors.message);
              }

              if (data.errors.sending !== '' && data.errors.sending !== undefined) {
                console.log(data.errors.sending);
              }
            }
          },
          error: function(){
            console.log('хз');
          }
        });
      }

      return false;
    });

  });
});