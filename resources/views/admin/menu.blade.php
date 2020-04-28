@extends('layouts/admin')
@section('content')    
  <section id="menu">
    <div class="container">
      <div class="admin-title">
        <h2>All Menu</h2>
        <hr>
      </div>
      <div class="menu-table">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Category</th>
              <th scope="col">Image URL</th>
              <th scope="col">date_added</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Chicken Marsala</td>
              <td>$19.90</td>
              <td>chicken - marsala wine - pasta</td>
              <td>Main Course</td>
              <td>https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F5107151.jpg</td>
              <td>20/1/20 1.02am</td>
              <td><a href="/admin/menu/edit"><i class="fas fa-edit fa-lg"></i></a></td>
              <td><a href="/admin/menu/delete"><i class="fas fa-trash-alt fa-lg"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Happy Halloween Trifles Mini</td>
              <td>$7.90</td>
              <td>chocolate - cream</td>
              <td>Desserts</td>
              <td>https://www.tastefullysimple.com/_/media/images/recipes/happyhalloweenminitrifles.jpg</td>
              <td>20/1/20 1.02am</td>
              <td><a href="/admin/menu/edit"><i class="fas fa-edit fa-lg"></i></a></td>
              <td><a href="/admin/menu/delete"><i class="fas fa-trash-alt fa-lg"></i></a></td>
            </tr>
           
          </tbody>
        </table>  
      </div> 
    </div>
  </section>
@endsection  
