$(function() {
  document.documentElement.className = document.documentElement.className.replace("no-js","js");
  var about = 0;
  $(window).on('scroll', function() {
  	if ($('.about').offset().top < $(window).scrollTop() + $(window).height() && about == 0) {
  		$('.about').addClass('about__focus');
  		about = 1;
  	}
  });
});