<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Villa Agency - Real Estate HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>
<style>
  .auth {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1px 3px;
    /* Adjust padding as needed */
    background-color: #333;
    /* Change to your desired button color */
    color: white;
    /* Text color */
    border-radius: 90px;
    /* Rounded corners */
    text-decoration: none;
    /* Remove underline */
    font-size: 1rem;
    /* Adjust font size as needed */
    font-weight: bold;
    /* Optional for emphasis */
  }
</style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> muhammadhamid.jj.7@gmail.com</li>
            <li><i class="fa fa-map"></i> Gulshan-e-maymer,taiser town karchi </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/muhammad-hamid-a0426a1b5/"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/m.hamid788788/"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <h1>Villa</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/" class="active">Home</a></li>
              <li><a href="{{ route('properties') }}">Properties</a></li>
              <li><a href="{{ route('property-details') }}">Property Details</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
              <li><a href="{{ route('dashboard') }}">Profile</a></li>
              <li><a href="{{ route('register') }}"><i class="fa fa-calendar"></i>SIGN UP / LOGIN</a></li>


            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Karachi, <em>Pakistan</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">islamabad, <em>Pakistan</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Lahore, <em>Pakistan</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
            <a href=#><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>Best Appartment &amp; Sea view</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Best useful links ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Villa Agency the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>250 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/video-frame.jpg" alt="">
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                  <p class="count-text ">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                  <p class="count-text ">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>185 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>4</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-01.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                        <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
                      </p>
                      <div class="icon-button">
                        <a href="{{route('property-details') }}"><i class="fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-02.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="{{ route('property-details') }}"><i class="fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-03.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="{{ route('property-details') }}""><i class=" fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- properties section start from here -->

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      
            <!-- !-- Properties Section --> 
            <div class="container mt-5">
              <h3>Properties</h3>
              <div class="row" id="property-cards">
                <!-- Dynamic property cards will be injected here -->
              </div>
            </div>

            <script>
              // Sample data for properties
              const properties = [{
                  id: 1,
                  title: 'Modern Apartment hamid',
                  description: 'Located in the heart of the city.',
                  imageUrl: 'assets/images/property-01.jpg',
                  price: '$1,200,000',
                  address: '18 Old Street Miami, OR 97219',
                  bedrooms: 1,
                  bathrooms: 1,
                  area: '120m2',
                  floor: 5,
                  parking: '1 spot'
                },
                {
                  id: 2,
                  title: 'Luxury Villa',
                  description: 'Spacious and beautiful with a large garden.',
                  imageUrl: 'assets/images/property-02.jpg',
                  price: '$2,500,000',
                  address: '26 Old Street Miami, OR 12870',
                  bedrooms: 4,
                  bathrooms: 3,
                  area: '450m2',
                  floor: 3,
                  parking: '2 spots'
                },
                {
                  id: 3,
                  title: 'Penthouse',
                  description: 'Ideal for luxury living.',
                  imageUrl: 'assets/images/property-03.jpg',
                  price: '$3,000,000',
                  address: '54 New Street Florida, OR 27001',
                  bedrooms: 5,
                  bathrooms: 4,
                  area: '300m2',
                  floor: 8,
                  parking: '3 spots'
                },                {
                  id: 4,
                  title: 'Penthouse',
                  description: 'Ideal for luxury living.',
                  imageUrl: 'assets/images/property-03.jpg',
                  price: '$3,000,000',
                  address: '54 New Street Florida, OR 27001',
                  bedrooms: 5,
                  bathrooms: 4,
                  area: '300m2',
                  floor: 8,
                  parking: '3 spots'
                },
                {
                  id: 5,
                  title: 'Penthouse',
                  description: 'Ideal for luxury living.',
                  imageUrl: 'assets/images/property-03.jpg',
                  price: '$3,000,000',
                  address: '54 New Street Florida, OR 27001',
                  bedrooms: 5,
                  bathrooms: 4,
                  area: '300m2',
                  floor: 8,
                  parking: '3 spots'
                },
                {
                  id: 6,
                  title: 'Penthouse',
                  description: 'Ideal for luxury living.',
                  imageUrl: 'assets/images/property-03.jpg',
                  price: '$3,000,000',
                  address: '54 New Street Florida, OR 27001',
                  bedrooms: 5,
                  bathrooms: 4,
                  area: '300m2',
                  floor: 8,
                  parking: '3 spots'
                },
                // Add more properties as needed
              ];

              // Function to render property cards
              function renderPropertyCards(data) {
                const cardGrid = document.getElementById('property-cards');
                cardGrid.innerHTML = ''; // Clear existing cards

                data.forEach(property => {
                  const card = document.createElement('div');
                  card.classList.add('col-lg-4', 'col-md-6', 'align-self-center', 'mb-30');

                  card.innerHTML = `
          <div class="item">
            <a href="property-details.html?id=${property.id}"><img src="${property.imageUrl}" alt="${property.title}"></a>
            <span class="category">${property.title}</span>
            <h6>${property.price}</h6>
            <h4><a href="property-details.html?id=${property.id}">${property.address}</a></h4>
            <ul>
              <li>Bedrooms: <span>${property.bedrooms}</span></li>
              <li>Bathrooms: <span>${property.bathrooms}</span></li>
              <li>Area: <span>${property.area}</span></li>
              <li>Floor: <span>${property.floor}</span></li>
              <li>Parking: <span>${property.parking}</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html?id=${property.id}">Schedule a visit</a>
            </div>
          </div>
        `;

                  cardGrid.appendChild(card);
                });
              }

              // Call the function to initially render all property cards
              renderPropertyCards(properties);
            </script>


            </script>
            <!-- <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="{{ route('property-details') }}"><img src="assets/images/property-02.jpg" alt=""></a>
                <span class="category">Luxury Villa</span>
                <h6>$1.180.000</h6>
                <h4><a href="{{ route('property-details') }}">54 Mid Street Florida, OR 27001</a></h4>
                <ul>
                  <li>Bedrooms: <span>6</span></li>
                  <li>Bathrooms: <span>5</span></li>
                  <li>Area: <span>450m2</span></li>
                  <li>Floor: <span>3</span></li>
                  <li>Parking: <span>8 spots</span></li>
                </ul>
                <div class="main-button">
                  <a href="{{ route('property-details') }}">Schedule a visit</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="{{ route('property-details') }}"><img src="assets/images/property-03.jpg" alt=""></a>
                <span class="category">Luxury Villa</span>
                <h6>$1.460.000</h6>
                <h4><a href="{{ route('property-details') }}">26 Old Street Miami, OR 38540</a></h4>
                <ul>
                  <li>Bedrooms: <span>5</span></li>
                  <li>Bathrooms: <span>4</span></li>
                  <li>Area: <span>225m2</span></li>
                  <li>Floor: <span>3</span></li>
                  <li>Parking: <span>10 spots</span></li>
                </ul>
                <div class="main-button">
                  <a href="property-details.blade.php">Schedule a visit</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="property-details.blade.php"><img src="assets/images/property-04.jpg" alt=""></a>
                <span class="category">Apartment</span>
                <h6>$584.500</h6>
                <h4><a href="property-details.blade.php">12 New Street Miami, OR 12650</a></h4>
                <ul>
                  <li>Bedrooms: <span>4</span></li>
                  <li>Bathrooms: <span>3</span></li>
                  <li>Area: <span>125m2</span></li>
                  <li>Floor: <span>25th</span></li>
                  <li>Parking: <span>2 cars</span></li>
                </ul>
                <div class="main-button">
                  <a href="property-details.blade.php">Schedule a visit</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="property-details.blade.php"><img src="assets/images/property-05.jpg" alt=""></a>
                <span class="category">Penthouse</span>
                <h6>$925.600</h6>
                <h4><a href="property-details.blade.php">34 Beach Street Miami, OR 42680</a></h4>
                <ul>
                  <li>Bedrooms: <span>4</span></li>
                  <li>Bathrooms: <span>4</span></li>
                  <li>Area: <span>180m2</span></li>
                  <li>Floor: <span>38th</span></li>
                  <li>Parking: <span>2 cars</span></li>
                </ul>
                <div class="main-button">
                  <a href="property-details.blade.php">Schedule a visit</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="property-details.blade.php"><img src="assets/images/property-06.jpg" alt=""></a>
                <span class="category">Modern Condo</span>
                <h6>$450.000</h6>
                <h4><a href="property-details.blade.php">22 New Street Portland, OR 16540</a></h4>
                <ul>
                  <li>Bedrooms: <span>3</span></li>
                  <li>Bathrooms: <span>2</span></li>
                  <li>Area: <span>165m2</span></li>
                  <li>Floor: <span>26th</span></li>
                  <li>Parking: <span>3 cars</span></li>
                </ul>
                <div class="main-button">
                  <a href="property-details.blade.php">Schedule a visit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="contact section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-lg-4">
              <div class="section-heading text-center">
                <h6>| Contact Us</h6>
                <h2>Get In Touch With Our Agents</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7229.6857462226835!2d67.11624023825112!3d25.039405881796633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3469ee0c58f8d%3A0x8c8be8f888363c89!2sSalfia%20Town%20Taiser%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1730653763394!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="item phone">
                    <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                    <h6>0324-8061046<br><span>Phone Number</span></h6>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item email">
                    <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                    <h6>muhammadhamid.jj.7 <br>@gmail.com<br><span>Business Email</span></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <form id="contact-form" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="name">Full Name</label>
                      <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="email">Email Address</label>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="subject">Subject</label>
                      <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="message">Message</label>
                      <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="container">
          <div class="col-lg-8">
            <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

              Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
          </div>
        </div>
      </footer>

      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/counter.js"></script>
      <script src="assets/js/custom.js"></script>

</body>

</html>