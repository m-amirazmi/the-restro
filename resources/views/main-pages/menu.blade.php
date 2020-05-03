@extends('layouts/landing')
@section('content')
  <section id="menu-top">
    <div class="menu-top-img">
      <img src="/img/menuimgtop.jpg" alt="">
    </div>
  </section>
  <section id="menu-body">
    <div class="container">
      <div class="menu-title">
        <hr class="hr1">
        <h2><span>M</span>enu</h2>
        <hr class="hr2">
      </div>
      <div class="menu-content">
        <div class="courses">
          <h2>Main Course</h2>
          <hr>
          <div class="row">
          @foreach ($menus as $menu)
              @if ($menu->category==='main-course')
                <div class="col-md-3 col-sm-12 course-main-card">
                  <div class="card course-img " style="width: 16rem;">
                    <img class="card-img-top" src="{{$menu->img}}" alt="">
                    <div class="course-detail card-body">
                      <div class="course-title">
                        <h5 class="card-title">{{$menu->name}}</h5>
                      </div>
                      <div class="course-info ">
                        <p>{{$menu->desc}}</p>
                        <p class="price card-text">{{$menu->price}}</p>
                      </div>
                    </div>
                  </div>
                </div>       
              @endif
          @endforeach
          </div>
        <div class="courses">
          <h2>Salad</h2>
          <hr>
          <div class="row">
          @foreach ($menus as $menu)
              @if ($menu->category==='salad')
                <div class="col-md-3 col-sm-12 course-main-card">
                  <div class="card course-img " style="width: 16rem;">
                    <img class="card-img-top" src="{{$menu->img}}" alt="">
                    <div class="course-detail card-body">
                      <div class="course-title">
                        <h5 class="card-title">{{$menu->name}}</h5>
                      </div>
                      <div class="course-info ">
                        <p>{{$menu->desc}}</p>
                        <p class="price card-text">{{$menu->price}}</p>
                      </div>
                    </div>
                  </div>
                </div>       
              @endif
          @endforeach
          </div>
        <div class="courses">
          <h2>Appetizer</h2>
          <hr>
          <div class="row">
          @foreach ($menus as $menu)
              @if ($menu->category==='appetizer')
                <div class="col-md-3 col-sm-12 course-main-card">
                  <div class="card course-img " style="width: 16rem;">
                    <img class="card-img-top" src="{{$menu->img}}" alt="">
                    <div class="course-detail card-body">
                      <div class="course-title">
                        <h5 class="card-title">{{$menu->name}}</h5>
                      </div>
                      <div class="course-info ">
                        <p>{{$menu->desc}}</p>
                        <p class="price card-text">{{$menu->price}}</p>
                      </div>
                    </div>
                  </div>
                </div>       
              @endif
          @endforeach
          </div>
        <div class="courses">
          <h2>Desserts</h2>
          <hr>
          <div class="row">
          @foreach ($menus as $menu)
              @if ($menu->category==='desserts')
                <div class="col-md-3 col-sm-12 course-main-card">
                  <div class="card course-img " style="width: 16rem;">
                    <img class="card-img-top" src="{{$menu->img}}" alt="">
                    <div class="course-detail card-body">
                      <div class="course-title">
                        <h5 class="card-title">{{$menu->name}}</h5>
                      </div>
                      <div class="course-info ">
                        <p>{{$menu->desc}}</p>
                        <p class="price card-text">{{$menu->price}}</p>
                      </div>
                    </div>
                  </div>
                </div>       
              @endif
          @endforeach
          </div>
        <div class="courses">
          <h2>Entrees</h2>
          <hr>
          <div class="row">
          @foreach ($menus as $menu)
              @if ($menu->category==='entrees')
                <div class="col-md-3 col-sm-12 course-main-card">
                  <div class="card course-img " style="width: 16rem;">
                    <img class="card-img-top" src="{{$menu->img}}" alt="">
                    <div class="course-detail card-body">
                      <div class="course-title">
                        <h5 class="card-title">{{$menu->name}}</h5>
                      </div>
                      <div class="course-info ">
                        <p>{{$menu->desc}}</p>
                        <p class="price card-text">{{$menu->price}}</p>
                      </div>
                    </div>
                  </div>
                </div>       
              @endif
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
