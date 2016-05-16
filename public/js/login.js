$('#register').addClass('hidden');
$('ul#top-bar li a').on('click', function() {
  $('#login').addClass('hidden');
  $('#register').addClass('hidden');
  $('ul#top-bar li').each(function() {
    $(this).removeClass('active');
  });
  $($(this).attr('href')).removeClass('hidden');
  $(this).parent('li').addClass('active');
});
