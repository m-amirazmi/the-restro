@extends('layouts/admin')
@section('content')    
  <section id="dashboard">
    <div class="container">
      <div class="admin-title">
        <h2>Dashboard</h2>
        <hr>
      </div>
      <div class="row dashboard-content">
        <div class="col-md-6 dashboard-menu">
          <div class="d-menu-details">
            <h1 class="d-menu-numbers">10</h1>
            <h5 class="d-menu-detail">Menus</h5>
          </div>
        </div>
        <div class="col-md-6 dashboard-menu">
          <div class="d-menu-details">
            <h1 class="d-menu-numbers">3</h1>
            <h5 class="d-menu-detail">Customers</h5>
          </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection  
