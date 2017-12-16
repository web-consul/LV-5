@extends('admin.layouts.app_admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="jumbotron center-block">
        <p><span class="label label-primary">Категорий 0</span></p>
      </div>
   </div>
   <div class="col-md-3">
     <div class="jumbotron center-block">
       <p><span class="label label-primary">Материалов 0</span></p>
     </div>
  </div>
  <div class="col-md-3">
    <div class="jumbotron center-block">
      <p><span class="label label-primary">Посетителей 0</span></p>
    </div>
 </div>
 <div class="col-md-3">
   <div class="jumbotron center-block">
     <p><span class="label label-primary">Сегодня 0</span></p>
   </div>
</div>
  </div>

<div class="row">
  <div class="col-md-6">
    <a class="btn btn-block btn-default" href="#">Добавить</a>
    <a class="list-group-item" href="#">
      <h4 class="list-group-item-text">Категория первая</h4>
      кол-во материалов</h4>
    </a>
  </div>

<div class="col-md-6">
  <a class="btn btn-block btn-default" href="#">Добавить</a>
  <a class="list-group-item" href="#">
    <h4 class="list-group-item-text">материал первая</h4>
    категория</h4>
  </a>
</div>
</div>
</div>
@endsection
