@extends('layouts/admin')
@section('content')    
  <section id="menu">
    <div class="container">
      <div class="admin-title">
        <h2>Customers</h2>
        <hr>
      </div>
      <div class="menu-table">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone #</th>
              <th scope="col">Guest</th>
              <th scope="col">Date Booked</th>
              <th scope="col">Time Booked</th>
              <th scope="col">date_added</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Muhamad Amir</td>
              <td>amir@gmial.com</td>
              <td>01119821105</td>
              <td>3</td>
              <td>10/05/2020</td>
              <td>7.30pm</td>
              <td>29/04/2020 1.04am</td>
              <td><a href="/admin/menu/edit"><i class="fas fa-edit fa-lg"></i></a></td>
              <td><a href="/admin/menu/delete"><i class="fas fa-trash-alt fa-lg"></i></a></td>
            </tr>
           
          </tbody>
        </table>  
      </div> 
    </div>
  </section>
@endsection  
