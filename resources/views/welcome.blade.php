@extends('layouts/landing')
@section('content')
  <section id="top-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 top-content">
          <div class="top-subheading">
            <hr>
            <h3>Discover your taste</h3>
          </div>
          <div class="top-title"><h2>Eat Healthy and Natural Food</h2></div>
          <div class="top-button">
            <a href="/menu" class="main-btn">Discover Menu </a>
            <div class="circle-button"><i class="fas fa-caret-right"></i></div>
          </div>
          <div class="top-socmed">
            <hr>
            <a class="socmed-btn" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
            <a class="socmed-btn" href="http://instagram.com"><i class="fab fa-instagram"></i></a>
            <a class="socmed-btn" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
        <div class="col-md-7 top-img">
          <img src="/img/salmonsalad.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <section id="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 about-img">
          <img src="/img/vegeplate.jpg" alt="">
        </div>
        <div class="col-md-6 about-content">
          <div class="about-subheading">
            <hr>
            <h4>Welcome</h4>
          </div>
          <div class="about-title"><h2>About Restro</h2></div>
          <div class="about-paragraphs">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit suscipit error dolorum dolor Reprehenderit suscipit error dolorum dolor </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam consequuntur expedita architecto distinctio illo quod corporis, harum quaerat, </p>
          </div>
          <div class="about-btn">
            <a href="/reservation">Reserve Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="featured-section">
    <div class="container">
      <div class="featured-heading">
        <div class="featured-sub">
          <hr>
          <h4>Explore</h4>
        </div>
        <div class="featured-title">
          <h2>Our Featured Food</h2>
        </div>
      </div>
      <div class="featured-content">
        <div class="row">
          <div class="col-md-3 col-sm-10 featured-content-box">
            <div class="featured-img">
              <img src="https://www.finedininglovers.com/sites/g/files/xknfdk626/files/styles/recipe_full_desktop/public/Original_18210_tuna-sashimi-sesame.jpg?itok=r11YiOd0" alt="">
            </div>
            <div class="featured-details">
              <h6>Tuna Sashimi</h6>
              <p>sesame seeds - carrot - noodles</p>
            </div>
            <a href="/reservation" class="featured-content-overlay">
              <div class="featured-content-text">
                <h5>Only $9.00</h5>
                <p>Reserve a Table Now</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-10 featured-content-box">
            <div class="featured-img">
              <img src="https://tipbuzz.com/wp-content/uploads/Chicken-Teriyaki-Featured-Image.jpg" alt="">
            </div>
            <div class="featured-details">
              <h6>Chicken Terayaki</h6>
              <p>fresh ginger - chicken - veggie oil</p>
            </div>
            <a href="/reservation" class="featured-content-overlay">
              <div class="featured-content-text">
                <h5>Only $12.90</h5>
                <p>Reserve a Table Now</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-10 featured-content-box">
            <div class="featured-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="featured-details">
              <h6>Salmon Sashimi</h6>
              <p>fresh salmon - fresh lemon</p>
            </div>
            <a href="/reservation" class="featured-content-overlay">
              <div class="featured-content-text">
                <h5>Only $7.50</h5>
                <p>Reserve a Table Now</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-10 featured-content-box">
            <div class="featured-img">
              <img src="https://www.mygourmetconnection.com/wp-content/uploads/salmon-fillets-garlic-soy-pan-sauce-720x540.jpg" alt="">
            </div>
            <div class="featured-details">
              <h6>Salmon Fillet</h6>
              <p>garlic soy sauce - toasted sesame</p>
            </div>
            <a href="/reservation" class="featured-content-overlay">
              <div class="featured-content-text">
                <h5>Only $11.20</h5>
                <p>Reserve a Table Now</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="menu-section">
    <div class="container">
      <div class="menu-head">
        <div class="menu-sub">
          <h4>Discover</h4>
          <hr>
        </div>
        <div class="menu-title">
          <h2>Our Food Menu</h2>
          <a href="/menu">See All Menu</a>
        </div>
      </div>
      <div class="menu-content">
        <div class="row">
          <div class="col-md-6 main-course">
            <div class="main-course-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="main-course-img-bg">
              <h2>MAIN COURSE</h2>
            </div>
          </div>
          <div class="col-md-6 main-course">
            <div class="main-course-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="main-course-img-bg">
              <h2>SALAD</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="side-course-img-bg">
              <h3>APPETIZER</h3>
            </div>
          </div>
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="side-course-img-bg">
              <h3>DESSERTS</h3>
            </div>
          </div>
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/a7/58/20/salmon-sashimi.jpg" alt="">
            </div>
            <div class="side-course-img-bg"><h3>ENTREES</h3></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
