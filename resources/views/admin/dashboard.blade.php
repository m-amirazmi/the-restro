<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Restro | Admin Area</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <div class="sidenav">
    <div class="side-title">
      <h2><span>The</span> Restro</h2>
      <hr>
    </div>
    <ul class="side-navigation">
      <li class="dashboard">
        <a href="/admin" class="dash-link">Dashboard</a>
      </li>
      <li class="menu dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/menu">All Menu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/menu/create">Create Menu</a>
        </div>
      </li>
      <li class="menu dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/customer">All Customers</a>
      </li>
      <li class="menu dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Staff
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/staff">All Staff</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/staff/create">Create Staff</a>
        </div>
      </li>
      <li class="settings">
        <a href="/setting">Setting</a>
      </li>
    </ul>
  </div>

  
  
  <div class="main">
    <h2>Sidebar</h2>
    <p>This sidebar is of full height (100%) and always shown.</p>
    <p>Scroll down the page to see the result.</p>
    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  </div>
  @include('shared/bootstrapjs')
  
</body>
</html>