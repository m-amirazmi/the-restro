@extends('layouts/admin')
@section('content')    
  <section id="menu">
    <div class="container">
      <div class="admin-title">
        <h2>Edit Menu</h2>
        <hr>
      </div>
      <form>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="categoryInput">Category</label>
              <select class="form-control" id="categoryInput" name="category">
                <option value="main-course">Main Course</option>
                <option value="salad">Salad</option>
                <option value="appetizer">Appetizer</option>
                <option value="desserts">Desserts</option>
                <option value="entrees">Entrees</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nameInput">Food Name</label>
              <input type="text" class="form-control" id="nameInput" placeholder="Chicken Marsala" name="menu-name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="priceInput">Food Price</label>
              <input type="text" class="form-control" id="priceInput" placeholder="$19.90" name="menu-price">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="imgInput">Food Image URL</label>
              <input type="text" class="form-control" id="imgInput" placeholder="https://www.tastefullysimple.com/_/media/images/recipes/happyhalloweenminitrifles.jpg" name="menu-img">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="descInput">Food Desc</label>
              <input type="text" class="form-control" id="descInput" placeholder="chocolate - cream" name="menu-desc">
            </div>
          </div>
        </div>
        <a href="/admin/menu" class="btn btn-danger">Add Menu</a>
      </form>
    </div>
  </section>
@endsection  
