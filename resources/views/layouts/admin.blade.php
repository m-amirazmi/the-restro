<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>The Restro</title>
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
      <link rel="stylesheet" href="css/app.css">
      <script src="https://kit.fontawesome.com/ce9a652be3.js" crossorigin="anonymous"></script>
    </head>
    <body>
    @include('shared/admin-sidebar')
    <div class="admin-main">
      @yield('content')
    </div>
      {{-- <section id="footer">
        <h6>Copyright&copy; 2020 The Restro by Muhamad Amir</h6>
      </section> --}}
    @include('shared/bootstrapjs')
    </body>
</html>