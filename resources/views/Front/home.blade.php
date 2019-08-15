@extends('Front/layout')
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-image: url({{asset('image/main.jpg')}});background-size: cover;background-position:center;height:450px">
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="cursor:pointer">
        <div class="my-3 py-3">
          <h2 class="display-5">HTML5</h2>
          <p class="lead">H5开发学习</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/html.jpg')}});background-size: cover;background-position:center;"></div>
    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">CSS3</h2>
      <p class="lead">CSS3开发学习</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/css.jpg')}});background-size: cover;background-position:center;"></div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Javascript</h2>
      <p class="lead">Javascript开发学习</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/javascript.jpg')}});background-size: cover;background-position:center;"></div>
  </div>
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">AngularJS/Vue</h2>
      <p class="lead">Javascript库学习</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/vue.jpg')}});background-size: cover;background-position:center;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden text-white">
    <div class="my-3 p-3">
      <h2 class="display-5">React</h2>
      <p class="lead">React库开发</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/react.png')}});background-size: cover;background-position:center;"></div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">PHP/Laravel</h2>
      <p class="lead">后端开发</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/php.png')}});background-size: cover;background-position:center;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">SQL</h2>
      <p class="lead">SQL学习</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/sql.jpg')}});background-size: cover;background-position:center;"></div>
  </div>
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden text-white">
    <div class="my-3 py-3">
      <h2 class="display-5">Allen’s Life</h2>
      <p class="lead">记录生活📝</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url({{asset('image/coming.jpg')}});background-size: cover;background-position:center;"></div>
  </div>
</div>
@endsection