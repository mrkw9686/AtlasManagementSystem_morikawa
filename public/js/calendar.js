$(function(){
$('.delete-modal-open').on('click',function(){
    $('.js-modal').fadeIn();
  // var reservePart = $(this).attr('reservePart');
  // var delete_date = $(this).attr('delete_date');
  //   $('.modal-inner-reservePart text').text(reservePart);
  //   $('.modal-inner-delete_date text').text(delete_date);
  //   $('.modal-inner-delete_date text').val(delete_date);

    return false;
  });


  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
