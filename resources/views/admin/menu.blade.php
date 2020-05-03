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
            @foreach ($menus as $menu)
              <tr>
                <td>{{$menu->name}}</td>
                <td>{{$menu->price}}</td>
                <td>{{$menu->desc}}</td>
                <td>{{$menu->category}}</td>
                <td>{{$menu->img}}</td>
                <td>{{$menu->created_at}}</td>
                <td><a href="/admin/menu/{{$menu->id}}/edit"><i class="fas fa-edit fa-lg"></i></a></td>
                <td>
                  <a href="#" onclick="event.preventDefault();
                  document.getElementById('delete-item-{{$menu->id}}').submit();"><i class="far fa-trash-alt"></i></a>
                    <form id="delete-item-{{$menu->id}}" action="/admin/menu/{{$menu->id}}/delete" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form></td>
              </tr>
              @endforeach
          </tbody>
        </table> 
        <div class="paginationlinks" style="font-size: .5rem">
          {{$menus->links()}}  
        </div>
      </div> 
    </div>
  </section>
@endsection  
