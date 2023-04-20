@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">


<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <div class="delete-modal">
      <div class="w-50 m-auto delete-modal-padding modal-inner-delete_date">
        <span></span>
       <input type="hidden" class="modal-inner-delete_date" name="delete_date" value="delete_date" form="deleteParts">
        </div>
        <div class=" w-50 m-auto delete-modal-padding modal-inner-delete_Part">
        <span></span>
        <input type="hidden" class="modal-inner-delete_Part" name="delete_Part" value="delete_Part" form="deleteParts">
        </div>
        <div class=" w-50 m-auto delete-modal-padding">
        <span>上記の予約をキャンセルしてもよろしいですか？</span>
        </div>
      </div>
        <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-primary d-inline-block" href="">閉じる</a>
                  <input type="submit" class="btn btn-danger d-block " form="deleteParts" value="キャンセル">
        </div>

  </div>

    </div>
      </div>
      {{ csrf_field() }}
    </form>
  </div>

  </div>
</div>
@endsection
