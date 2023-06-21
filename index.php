<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Smart Watch</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="flex1">
      <div class="logo">
        <img src="" alt="">
      </div>
      <div class="navMenu">
        <a href="#home" class="homeNavItem navItem">Home</a>
        <a href="#about" class="aboutNavItem navItem">About</a>
        <a href="#features" class="featuresNavItem navItem">Features</a>
        <a href="HomeProducts.php" class="productNavItem navItem">Product</a>
        <a href="#testimonial" class="testimonialNavItem navItem">Testimonial</a>
        <a href="#faq" class="faqNavItem navItem">FQA</a>
        <a href="#contact" class="contactNavItem navItem">Contact</a>
        <a href="adminlogin.php" class="contactNavItem navItem">Admin</a>
      </div>
      <i class="fas fa-bars hamburger"></i>
    </nav>
  </header>


  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".navMenu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }
  </script>


  <main>
    <section class="home background" id="home">
      <div class="container flex1">
        <div class="left">
          <h1> Best digital watch for your daily life </h1>
          <p> Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am engrossed itatibus additions. </p>
          <button>BUY NOW</button><a href='signup/index.php'></a>
        </div>
        <div class="right  mtop">
          <div class="img_animation">
            <img src="image/home.png" alt="">
          </div>
          <div class="text">
            <h2> <span>50%</span>Off </h2>
          </div>
        </div>
      </div>
    </section>





    <section class="about background2" id="about">
      <div class="container">
        <div class="heading">
          <h2>Why Ponno Is Best </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>
        </div>

        <div class="content mtop flex">
          <div class="left mtop">
            <img src="image/a.png" alt="">
          </div>
          <div class="right grid">
            <div class="box">
              <i class="fas fa-palette"></i>
              <h3>High Quality Design </h3>
              <p>Viewing hastily or written dearest elderly up weather. direction so sweetness.</p>
            </div>
            <div class="box">
              <i class="fas fa-mobile"></i>
              <h3>High Quality Design </h3>
              <p>Viewing hastily or written dearest elderly up weather. direction so sweetness.</p>
            </div>
            <div class="box">
              <i class="fas fa-mobile"></i>
              <h3>High Quality Design </h3>
              <p>Viewing hastily or written dearest elderly up weather. direction so sweetness.</p>
            </div>
            <div class="box">
              <i class="fas fa-palette"></i>
              <h3>High Quality Design </h3>
              <p>Viewing hastily or written dearest elderly up weather. direction so sweetness.</p>
            </div>
          </div>
        </div>
    </section>


    <section class="about background" id="about">
      <div class="container">
        <div class="heading">
          <h2>About The Product </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>
        </div>

        <div class="content mtop flex">
          <div class="left">
            <div class="features_box flex">
              <div class="img">
                <i class="fas fa-bell"></i>
              </div>
              <div class="text">
                <h3> GPS System Tracking</h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
            <div class="features_box flex">
              <div class="img">
                <i class="fas fa-wifi"></i>
              </div>
              <div class="text">
                <h3>WiFi Data Sync</h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
            <div class="features_box flex">
              <div class="img">
                <i class="fas fa-bold"></i>
              </div>
              <div class="text">
                <h3> Blood Pressure Management</h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
            <div class="features_box flex">
              <div class="img">
                <i class="fas fa-cloud"></i>
              </div>
              <div class="text">
                <h3> Weather Update</h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
          </div>


          <div class="right">
            <div class="img_animation">
              <img src="image/a.png" alt="">
            </div>
          </div>
        </div>
    </section>




    <section class="features background2" id="features">
      <div class="container">
        <div class="heading">
          <h2> Attractive Features</h2>
          <p> Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise.</p>
        </div>

        <div class="content grid1 mtop">
          <div class="item item_first">
            <div class="features_box flex1">
              <div class="text">
                <h3> Heart Monitor </h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
              <div class="img">
                <i class="fas fa-heartbeat"></i>
              </div>
            </div>
            <div class="features_box flex1">
              <div class="text">
                <h3> Alarm Alert </h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
              <div class="img">
                <i class="fas fa-bell"></i>
              </div>
            </div>
            <div class="features_box flex1">
              <div class="text">
                <h3> Distance Counter </h3>
                <p> New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
              <div class="img">
                <i class="fas fa-street-view"></i>
              </div>
            </div>
          </div>


          <div class="item">
            <img src="image/p.png" alt="">
          </div>


          <div class="item">
            <div class="features_box flex1">
              <div class="img">
                <i class="fab fa-bluetooth"></i>
              </div>
              <div class="text">
                <h3> Bluetooth </h3>
                <p>New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
            <div class="features_box flex1">
              <div class="img">
                <i class="fas fa-cloud"></i>
              </div>
              <div class="text">
                <h3> Weather Update </h3>
                <p>New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
            <div class="features_box flex1">
              <div class="img">
                <i class="fas fa-video"></i>
              </div>
              <div class="text">
                <h3> Video Call </h3>
                <p>New had happen unable uneasy. Drawings pronounce can be followed improved out. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="product background" id="product">
      <div class="container">
        <div class="heading">
          <h2>Our Awesome Products </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>
        </div>

        <div class="content grid1 mtop">
          <div class="box">
            <div class="img">
              <img src="image/a.png" alt="">
            </div>
            <div class="text">
              <h3>Ponno Blue</h3>
              <div class="rate flex">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star "></i>
              </div>
              <h1>$135 <span>$193</span> </h1>
              <button>Buy Now</button>
            </div>
          </div>
          <div class="box">
            <div class="img">
              <img src="image/p.png" alt="">
            </div>
            <div class="text">
              <h3>Ponno Black</h3>
              <div class="rate flex">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star "></i>
              </div>
              <h1>$135 <span>$193</span> </h1>
              <button>Buy Now</button>
            </div>
          </div>
          <div class="box">
            <div class="img">
              <img src="image/home.png" alt="">
            </div>
            <div class="text">
              <h3>Ponno Grey</h3>
              <div class="rate flex">
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star "></i>
              </div>
              <h1>$135 <span>$193</span> </h1>
              <button>Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </section>





    <section class="wrapper background2">
      <div class="container flex">
        <div class="left">
          <h2>Why Choose Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="content grid">
            <div class="box flex">
              <i class="far fa-check-circle"></i>
              <h3>1 Year Guarantee</h3>
            </div>
            <div class="box flex">
              <i class="far fa-check-circle"></i>
              <h3>Free Shipping</h3>
            </div>
            <div class="box flex">
              <i class="far fa-check-circle"></i>
              <h3>Product Return</h3>
            </div>
            <div class="box flex">
              <i class="far fa-check-circle"></i>
              <h3>Dedicated Support</h3>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="img">
            <img src="image/w.jpg" alt="">
          </div>
          <div class="playbtn">
            <i class="fas fa-play"></i>
          </div>
        </div>
      </div>
    </section>


    <section class="product testimonial background" id="testimonial">
      <div class="container">
        <div class="heading">
          <h2>Our Awesome Products </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>
        </div>

        <div class="content grid mtop">
          <div class="box">
            <div class="box_img">
              <img src="image/t2.jpg" alt="">
            </div>
            <div class="text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <h3>Natha Roy</h3>
              <p>CEO of Apple</p>
            </div>
          </div>
          <div class="box">
            <div class="box_img">
              <img src="image/t1.jpg" alt="">
            </div>
            <div class="text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <h3>Natha Roy</h3>
              <p>CEO of Apple</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="subscribe background2">
      <div class="container">
        <div class="heading">
          <h2>Subscribe To Get Updates </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>

          <div class="input flex1">
            <input type="text" placeholder="Your email address....">
            <button>Subscribe <i class="far fa-paper-plane"></i></button>
          </div>
        </div>
      </div>
    </section>



    <section class="faq  background" id="faq">
      <div class="container">
        <div class="heading">
          <h2>Asked Questions </h2>
          <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise. </p>
        </div>

        <div class="content">
          <div class="accordionWrapper flex">
            <div class="left">
              <div class="accordionItem open">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>


              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>
            </div>

            <div class="right">
              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem open">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>

              <div class="accordionItem close">
                <h2 class="accordionItemHeading">How can I order my favrourate product ? <i class="fa fa-plus"></i> </h2>
                <div class="accordionItemContent">
                  <p>Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script>
      var accItem = document.getElementsByClassName('accordionItem');
      var accHD = document.getElementsByClassName('accordionItemHeading');
      for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
      }

      function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
          accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
          this.parentNode.className = 'accordionItem open';
        }
      }
    </script>

    <section class="contact background2" id="contact">
      <div class="container flex">
        <div class="left">
          <form class="">
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email ">
            <input type="text" placeholder="Your Phone Number ">
            <textarea name="name" rows="5" cols="80">Write Your Message Here....</textarea>
            <input type="submit" name="" value="Send Message">
          </form>
        </div>
        <div class="right">
          <h2>Contact Us </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <div class="text">
            <h3>Head Office</h3>
            <i class="fas fa-map-marker-alt"></i>
            <label>Amsterdam, NY 12010</label> <br><br>

            <i class="fas fa-phone"></i>
            <label>+977 9813253081</label> <br><br>

            <i class="fas fa-envelope"></i>
            <label>demoexample@gmail.com</label>
          </div>
        </div>
      </div>
    </section>

    <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14131.036667732067!2d85.32395955!3d27.69383745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1631516846830!5m2!1sen!2snp" width="600" height="450"
        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>







    <footer class="background">
      <div class="container">
        <div class="heading">
          <div class="logo">
            <img src="image/logo.png" alt="">
          </div>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <div class="icon flex">
            <img src="https://img.icons8.com/color/50/000000/facebook-new.png" />
            <img src="https://img.icons8.com/color/48/000000/twitter-circled--v5.png" />
            <img src="https://img.icons8.com/color/48/000000/pinterest--v6.png" />
            <img src="https://img.icons8.com/fluency/48/000000/linkedin-circled.png" />
            <img src="https://img.icons8.com/fluency/48/000000/google-plus-circled.png" />
            <img src="https://img.icons8.com/fluency/48/000000/github.png" />
          </div>
        </div>
      </div>
    </footer>
  </main>










  <script>
    function selectElementByClass(className) {
      return document.querySelector(`.${className}`);
    }

    const sections = [
      selectElementByClass('home'),
      selectElementByClass('about'),
      selectElementByClass('features'),
      selectElementByClass('product'),
      selectElementByClass('testimonial'),
      selectElementByClass('faq'),
      selectElementByClass('contact'),
    ];

    const navItems = {
      home: selectElementByClass('homeNavItem'),
      about: selectElementByClass('aboutNavItem'),
      features: selectElementByClass('featuresNavItem'),
      product: selectElementByClass('productNavItem'),
      testimonial: selectElementByClass('testimonialNavItem'),
      faq: selectElementByClass('faqNavItem'),
      contact: selectElementByClass('contactNavItem'),
    };

    // intersection observer setup
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.5,
    };

    function observerCallback(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // get the nav item corresponding to the id of the section
          // that is currently in view
          const navItem = navItems[entry.target.id];
          // add 'active' class on the navItem
          navItem.classList.add('active');
          // remove 'active' class from any navItem that is not
          // same as 'navItem' defined above
          Object.values(navItems).forEach((item) => {
            if (item != navItem) {
              item.classList.remove('active');
            }
          });
        }
      });
    }

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    sections.forEach((sec) => observer.observe(sec));
  </script>


</body>

</html>