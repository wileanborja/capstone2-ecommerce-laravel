<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sakura</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Authentication Links -->
            @guest

            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

            @if (Route::has('register'))

            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else
            
            <a id="" class="" href="/catalog" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          @endguest
        </ul>
        <a href="#event">Why Choose Us?</a>
        <a href="#menu-list">Menu</a>
        <a href="#book-table">Book a Table</a>
        <a href="#about">About</a>
        <a href="#contact">Contact Us</a>
      </div>
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()" class="pull-right menu-icon">☰</span>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="inner text-center">
        <h1 class="logo-name">Sakura</h1>
        <p>We’re on a roll</p>
        <a class="btn btn-info btn-read-more" href="#menu-list">See Menu</a>
        <a class="btn btn-info btn-read-more d-flex-block" href="#book-table">Book a Table</a>
      </div>
    </div>
  </div>
</div>
</section>
<!-- / banner -->

<!-- event -->
<section id="event">
  <div class="bg-color" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center" style="padding:60px;">
          <h1 class="header-h">Why Choose Us?</h1>
        </div>
        <div class="col-md-12" style="padding-bottom:60px;">
          <div class="item active left">
            <div class="col-md-6 col-sm-6 left-images">
              <img src="img/res02.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 details-text">
              <div class="content-holder">
                <h2>Reimagining Japanese Cuisine.</h2>
                <p>A reimagining of Japanese culinary experiences through a multi-concept ambience, from an edomae sushi counter to teppanyaki and robatayaki grill sections, Sakura conjures subtle flavours and exciting combinations using fresh ingredients from Tsukiji and other parts of the world.</p>
                
                <a class="btn btn-imfo btn-read-more" href="event">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ event -->
<!-- menu -->
<section id="menu-list" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center marb-35">
        <h1 class="header-h">Menu</h1>
      </div>

      <div class="col-md-12  text-center" id="menu-flters">
        <ul>
          <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
          <li><a class="filter" data-filter=".breakfast">Ramen</a></li>
          <li><a class="filter" data-filter=".lunch">Rice Bowl</a></li>
          <li><a class="filter" data-filter=".dinner">Sushi</a></li>
        </ul>
      </div>

      <div id="menu-wrapper">

        <div class="breakfast menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Meat Ramen</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱500</span>
          </span>
        </div>

        <div class="breakfast menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Meaty Ramen</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱400</span>
          </span>
        </div>

        <div class="breakfast menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">White Ramen</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱650</span>
          </span>
        </div>

        <div class="lunch menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Katusdon</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱350</span>
          </span>
        </div>

        <div class="lunch menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Gyudon</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱450</span>
          </span>
        </div>

        <div class="lunch menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Oyakodon</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱300</span>
          </span>
        </div>

        <div class="dinner menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">California Rolls</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱400</span>
          </span>
        </div>

        <div class="dinner menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Sashimi</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱500</span>
          </span>
        </div>

        <div class="dinner menu-restaurant">
          <span class="clearfix">
            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Nigiri</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">₱420</span>
          </span>
        </div>

      </div>
    </div>
  </div>
</section>
<!--/ menu -->


<!--about-->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center marb-35">
        <h1 class="header-h">Exquisitely Japanese.</h1>
        <p class="header-p">We offer traditional Japanese gastronomy at its healthy best—absolutely fresh seafood, luscious and tender meat dishes, and superbly crispy tempura.</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="col-md-6 col-sm-6">
          <div class="about-info">
            <h2 class="heading">Straight out of the kitchen to your doorstep</h2>
            <p>Sakura is our food delivery platform that makes getting great food from your favorite local restaurants as easy as requesting a ride. Sakura connects you with a broad range of local restaurants and food, so you can order from the full menus of your local favorites whenever you want.</p>
            <div class="details-list">
              <ul>
                <li><i class="fa fa-check"></i>Ramen</li>
                <li><i class="fa fa-check"></i>Rice Bowl</li>
                <li><i class="fa fa-check"></i>Sushi</li>
                <li><i class="fa fa-check"></i>Side Dish</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <img src="img/res01.jpg" alt="" class="img-responsive">
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>
<!--/about-->

<!-- book a table -->
<section id="book-table" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="header-h">Book Your table</h1>
        <p class="header-p">Reserve your spot to avoid falling in line!</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+(02)88558558</p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday<br>10:00AM - 9:00PM</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00AM - 10:00PM
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Book Table</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / book a table-->

  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Contact Us</h1>
          <p class="header-p">Get in touch with us!</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+(02)88558558<span class="contacts-sp"></span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Operating Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday<br>10:00AM - 9:00PM</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday<br>08:00AM - 10:00PM
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="lastName" id="lastName" placeholder="Last Name" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-8 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Send Feedback</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Sakura</h4>
            <address>399 Sen. Gil Puyat, Bel Air<br>Makati, 1209</address>
            <div class="social-list">
              <a href="https://twitter.com/wilean_borja"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://www.facebook.com/zuittphilippines/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Sakura. 2020. All Rights Reserved
              <div class="credits">

                Designed by <a href="https://bootstrapmade.com/">Zuitt Coding Bootcamp PH</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
