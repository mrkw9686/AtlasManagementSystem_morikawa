@extends('layouts.sidebar')

@section('content')
<div class="w-75 mx-auto adjust-table-boder">
  <div class="w-100">
    <h3 class="adjust-table-Title">{{ $calendar->getTitle() }}</h3>
    <p>{!! $calendar->render() !!}</p>
  </div>
</div>
@endsection
