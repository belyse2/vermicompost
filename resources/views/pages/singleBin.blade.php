@extends('pages.index')
@section('content')

 <div class="list-group">

   @csrf
    <a href="#" class="list-group-item list-group</a>
    <a href="#" class="list-group-item list-group-item-action">{{$bin->number}}</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>

  </div>
@endsection
