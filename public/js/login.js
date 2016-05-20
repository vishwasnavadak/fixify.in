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
function validate() {
  $('#register input.req').each(function() {
    $(this).removeClass('err');
    if($(this).val().length <= 0) {
      $(this).addClass('err');
      return false;
    }
  });
  if($('#register input[name="passwd"]').val() != $('#register input[name="passwd2"]').val()) {
    $('#register input[name="passwd2"]').addClass('err');
    return false;
  }
  return true;
}
