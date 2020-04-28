@extends('layouts/admin')
@section('content')    
  <section id="menu">
    <div class="container">
      <div class="admin-title">
        <h2>Create Staff</h2>
        <hr>
      </div>
      <form>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="categoryInput">Role</label>
              <select class="form-control" id="categoryInput" name="category">
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="staff">Staff</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="fnameInput">First Name</label>
              <input type="text" class="form-control" id="fnameInput" placeholder="Muhamad" name="fname">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="lnameInput">Last Name</label>
              <input type="text" class="form-control" id="lnameInput" placeholder="Amir" name="lname">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="emailInput">Email</label>
              <input type="email" class="form-control" id="imgInput" placeholder="amir@gmail.com" name="email">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phoneInput">Phone #</label>
              <input type="text" class="form-control" id="phoneInput" placeholder="01119821105" name="phone">
            </div>
          </div>
        </div>
        <a href="/admin/menu" class="btn btn-danger">Add Staff</a>
      </form>
    </div>
  </section>
@endsection  
