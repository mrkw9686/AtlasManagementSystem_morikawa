$(function(){
$('.delete-modal-open').on('click',function(){
    $('.js-modal').fadeIn();
  // var delete_Part = $(this).attr(value);
  var delete_date = $(this).attr(delete_date);
  // $('.modal-inner-delete_Part').text(delete_Part);
  // $('.modal-inner-delete_Part').val(delete_Part);
    $('.modal-inner-delete_date span').text(delete_date);
    // $('.modal-inner-delete_date').val(delete_date);
console.log(delete_date)
    return false;
  });


  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
