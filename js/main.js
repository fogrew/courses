$(function() {
  // navbar scroll smoth
  $('.b-navbar a[href*=#]:not([href=#])').click(function() {
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
      navbar   = $('.b-navbar').height();
  $(window).on('scroll', function() {
    scrolled = $(window).scrollTop();
    features = $('.b-features').offset().top;
    if (features < scrolled + navbar && fixed == 0) {
      $('.b-navbar').addClass('b-navbar_fixed');
      fixed = 1;
    }
    if (features > scrolled + navbar && fixed == 1) {
      $('.b-navbar').removeClass('b-navbar_fixed');
      fixed = 0;
    }
    if(scrolled < features) {
      $('.b-hero').css('background-position-y', -(scrolled * 0.35) + 'px');
    }
  });

  // tabs
	$('.b-tabs').on('click', '.b-tabs__tab:not(.b-tabs__tab_active)', function() {  
	    $(this).addClass('b-tabs__tab_active').siblings().removeClass('b-tabs__tab_active')  
	    .parents('.b-container').find('.b-tabs-content').find('.b-tabs-content__tab-content').eq($(this).index()).addClass('b-tabs-content__tab-content_active').siblings('.b-tabs-content__tab-content').removeClass('b-tabs-content__tab-content_active');  
  });
});