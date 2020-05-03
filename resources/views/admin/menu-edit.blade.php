@extends('layouts/admin')
@section('content')    
  <section id="menu">
    <div class="container">
      <div class="admin-title">
        <h2>Edit Menu</h2>
        <hr>
      </div>
      {!! Form::open(['action' => ['MenusController@update', $menu->id], 'method'=>'POST']) !!}
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('category', 'Category', ['class'=>''])}}
              {{Form::select('category', [
                'main-course' => 'Main Course',
                'salad' => 'Salad',
                'appetizer' => 'Appetizer',
                'desserts' => 'Desserts',
                'entrees' => 'Entrees'                 
              ], $menu->category, ['class'=>'form-control'])}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {{Form::label('name', 'Food Name', ['class'=>''])}}
              {{Form::text('name', $menu->name, ['class'=>'form-control'])}}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {{Form::label('price', 'Food Price', ['class'=>''])}}
              {{Form::text('price', $menu->price, ['class'=>'form-control'], ['placeholder'=>'$19.90'])}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('img', 'Food Image URL', ['class'=>''])}}
              {{Form::text('img', $menu->img, ['class'=>'form-control'], ['placeholder'=>'https://www.tastefullysimple.com/_/media/images/recipes/happyhalloweenminitrifles.jpg'])}}
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('desc', 'Food Desc', ['class'=>''])}}
              {{Form::text('desc', $menu->desc, ['class'=>'form-control'], ['placeholder'=>'chocolate - cream'])}}
            </div>
          </div>
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Menu', ['class'=>'btn btn-danger'])}}
      {!! Form::close() !!}
    </div>
  </section>
@endsection  
