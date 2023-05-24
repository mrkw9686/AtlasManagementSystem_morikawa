@extends('layouts.sidebar')
@section('content')

<div class="w-100 vh-100 d-flex " style="align-items:center; justify-content:center;">
  <div class="w-100 vh-100 border p-5 adjust-table">
    <div class="adjust-table-boder ">
          <h3 class="adjust-table-Title ">{{ $calendar->getTitle() }}</h3>
    {!! $calendar->render() !!}
    <div class="adjust-table-btn m-auto text-right">
      <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
      </div>
    </div>
  </div>
</div>
@endsection
