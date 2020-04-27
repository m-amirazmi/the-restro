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
              <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2013/11/25/0/FNK_pan-seared-salmon-with-kale-apple-salad_s4x3.jpg.rend.hgtvcom.616.462.suffix/1387918756116.jpeg" alt="">
            </div>
            <div class="main-course-img-bg">
              <h2>MAIN COURSE</h2>
            </div>
          </div>
          <div class="col-md-6 main-course">
            <div class="main-course-img">
              <img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/exps6498_MRR133247D07_30_5b_WEB-2.jpg" alt="">
            </div>
            <div class="main-course-img-bg">
              <h2>SALAD</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://www.recipetineats.com/wp-content/uploads/2016/10/Smoked-Salmon-Bites_2.jpg" alt="">
            </div>
            <div class="side-course-img-bg">
              <h3>APPETIZER</h3>
            </div>
          </div>
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/coffee_terrine.jpg" alt="">
            </div>
            <div class="side-course-img-bg">
              <h3>DESSERTS</h3>
            </div>
          </div>
          <div class="col-md-4 side-course">
            <div class="side-course-img">
              <img src="https://www.simplyorganic.com/community/images/made/bf57b6a338206c8d/Simply-Organic-Entree-beed-600x600_630_630_s_c1.jpg" alt="">
            </div>
            <div class="side-course-img-bg"><h3>ENTREES</h3></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="reservation-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 reservation-detail">
          <div class="reservation-title">
            <div class="reservation-sub">
              <h4>Let's</h4>
              <hr>
            </div>
            <h2>Book a Table</h2>
          </div>
          <div class="reservation-form">
            <form action="" method="POST">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="date">Date: </label>
                    <input type="text" name="date" class="form-control" id="date" placeholder="28/04/2020">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="time">Time: </label>
                    <input type="text" name="time" class="form-control" id="time" placeholder="2.18AM">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="guest">Guest: </label>
                    <select class="form-control" id="guest" name="guest">
                      <option value="1">1 People</option>
                      <option value="2">2 People</option>
                      <option value="3" selected>3 People</option>
                      <option value="4">4 People</option>
                      <option value="5">5 People</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="fname">First Name: </label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Amir">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4 reservation-img">
          <img src="/img/reserveimg.jpg" alt="">
        </div>
      </div>
    </div>

  </section>
  <section id="footer">
    <h6>Copyright&copy; 2020 The Restro by Muhamad Amir</h6>
  </section>
  
@endsection
