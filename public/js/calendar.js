$(function(){
$('.delete-modal-open').on('click',function(){
    $('.js-modal').fadeIn();
  var delete_Part = $(this).attr('delete_Part');
  var delete_date = $(this).val();
  $('.modal-inner-delete_Part span').text("時間:"+delete_Part);
  $('.modal-inner-delete_Part input').val(delete_Part);
    $('.modal-inner-delete_date span').text("予約日:"+delete_date);
  $('.modal-inner-delete_date input').val(delete_date);

    return false;
  });


  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
