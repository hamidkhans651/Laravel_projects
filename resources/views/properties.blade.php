<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


  <title>Villa Agency - Property Listing by TemplateMo</title>

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
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
              <li><a href="/">Home</a></li>
              <li><a class="active" href="{{ route('properties') }}">Properties</a></li>
              <li><a href="{{ route('property-details') }}">Property Details</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>

              <li><a href="{{ route('contact') }}">Profile</a></li>
              <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>

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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul>


      <!-- property cards -->


      <!-- Properties Section -->
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
            title: 'Modern Apartment',
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




      <footer>
        <div class="container">
          <div class="col-lg-12">
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

</body>

</html>