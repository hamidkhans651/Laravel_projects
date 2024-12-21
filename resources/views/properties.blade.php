<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/Properties.css">
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



  <!-- ***** Header Area Start ***** -->
  <x-navigation />

  <!-- ***** Header Area End ***** -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties for Sale</h3>
        </div>
      </div>
    </div>
  </div>
  </head>

  <body>
    <div class="section properties">
      <div class="container">
        <div class="containerproperties">
        </div>

        <!-- <input type="text" id="min-price" placeholder="Min Price" />
                <input type="text" id="max-price" placeholder="Max Price" /> -->


        <div class="price-fixing">

          <select id="city-dropdown">

            <option value="" disabled selected>Select City for Property</option>

          </select>
          <select id="property-types-dropdown">

            <option value="" disabled selected>Select Type of Property</option>

          </select>

          <div class="slider-container">
            <input type="range" min="0" max="1000000" value="100" class="slider" id="minPrice">
            <input type="range" min="0" max="1000000" value="900" class="slider" id="maxPrice">
            <div class="value-display">
              <span id="minPriceLabel">$40000</span> - <span id="maxPriceLabel">$900</span>
            </div>
          </div>
        </div>


        <script>
          const minPriceSlider = document.getElementById('minPrice');
          const maxPriceSlider = document.getElementById('maxPrice');
          const minPriceLabel = document.getElementById('minPriceLabel');
          const maxPriceLabel = document.getElementById('maxPriceLabel');

          function updateLabels() {
            let minVal = parseInt(minPriceSlider.value);
            let maxVal = parseInt(maxPriceSlider.value);

            // Prevent overlapping
            if (minVal >= maxVal) {
              if (this.id === 'minPrice') {
                minPriceSlider.value = maxVal - 1;
                minVal = maxVal - 1;
              } else {
                maxPriceSlider.value = minVal + 1;
                maxVal = minVal + 1;
              }
            }

            minPriceLabel.textContent = `$${minVal}`;
            maxPriceLabel.textContent = `$${maxVal}`;
          }

          minPriceSlider.addEventListener('input', updateLabels);
          maxPriceSlider.addEventListener('input', updateLabels);
        </script>


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
          <li>
            <a id="toogleonclick" href="#!" data-filter=".rac">Switch to Rent</a>
          </li>
          <li>


            <a id="applyFilters" href="#!" data-filter=".rac">Apply Filters</a>
          </li>
        </ul>


        <script>
          // Function to toggle between Sale and Rent lists
          function togglePropertyType() {
            isForSale = !isForSale;
            renderPropertyList();

            // Update button text
            const toggleButton = document.querySelector('button');
            toggleButton.textContent = isForSale ? "Switch to Rent" : "Switch to Sale";
          }

          // Initial render of the property list
          renderPropertyList();
        </script>


        <!-- property cards -->
        <!-- Properties Section -->

        <script>
          // Sample data for Buy and Rent properties

          const propertiesForSale = [, "House", "Apartment", "Land Plot", "Commercial Space", "Townhouse"];
          const propertiesForRent = ["ALL categories", "House", "Apartment", "Office Space", "Studio Apartment", "Retail Space"];

          // Track current property type (default to 'sale')
          let isForSale = true;

          // location dropdown menu
          // Sample mock data for cities
          const mockCities = [{
              name: 'Karachi'
            },
            {
              name: 'Lahore'
            },
            {
              name: 'Islamabad'
            },
            {
              name: 'Faisalabad'
            },
            {
              name: 'Rawalpindi'
            },
            {
              name: 'Multan'
            },
            {
              name: 'Quetta'
            },
            {
              name: 'Peshawar'
            },
            {
              name: 'Sialkot'
            }
          ];

          // Sample mock data for categories
          const mockCategories = [{
              name: 'House'
            },
            {
              name: 'Apartment'
            },
            {
              name: 'Commercial Space'
            },
            {
              name: 'Office Space'
            },
            {
              name: 'Retail Space'
            },
            {
              name: 'Land Plot'
            },
            {
              name: 'Townhouse'
            }
          ];


          // Function to populate cities in the dropdown
          async function populateCitiesDropdown() {
            try {
              const cityDropdown = document.getElementById('city-dropdown');
              cityDropdown.innerHTML = ''; // Clear existing options to prevent duplication

              // Add the default 'Select City' option
              const defaultOption = document.createElement('option');
              defaultOption.value = '';
              defaultOption.disabled = true;
              defaultOption.selected = true;
              defaultOption.textContent = 'Select City for Property';
              cityDropdown.appendChild(defaultOption);

              // Populate with mock data
              mockCities.forEach(city => {
                const option = document.createElement('option');
                option.value = city.name;
                option.textContent = city.name;
                cityDropdown.appendChild(option);
              });
            } catch (error) {
              console.error('Error fetching cities:', error);
            }
          }


          // Function to populate types of properties in the dropdown
          async function populatePropertyTypesDropdown() {
            try {
              const propertyTypesDropdown = document.getElementById('property-types-dropdown');
              // Using mock data instead of API call
              mockCategories.forEach(type => {
                const option = document.createElement('option');
                option.value = type.name;
                option.textContent = type.name;
                propertyTypesDropdown.appendChild(option);
              });
            } catch (error) {
              console.error('Error fetching property types:', error);
            }
          }

          // Initialize dropdowns and property list on page load
          document.addEventListener('DOMContentLoaded', () => {
            populateCitiesDropdown();
            populatePropertyTypesDropdown();
            populatePropertyList();
          });


          // Fetch and populate property categories in the list
          async function populatePropertyList() {
            try {
              const propertyList = document.getElementById('property-list');
              propertyList.innerHTML = ''; // Clear existing items
              // Using mock data instead of API call
              mockCategories.forEach(category => {
                const li = document.createElement('li');
                li.textContent = category.name;
                propertyList.appendChild(li);
              });
            } catch (error) {
              console.error('Error fetching categories:', error);
            }
          }

          // Initialize dropdown and property list on page load
          document.addEventListener('DOMContentLoaded', () => {
            populateCitiesDropdown();
            populatePropertyList();
          });
        </script>






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