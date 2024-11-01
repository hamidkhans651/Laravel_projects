<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Properties Catalog</title>
    <link rel="stylesheet" href="css/Properties.css">
</head>

<body>
      <main class="mainProperties">


        <div class="mastersidebar">

            <div class="containerproperties">
                <!-- Category Title -->
                <h2 id="property-title" class=" ">Properties for Sale</h2>
                <button onclick="togglePropertyType()">Switch to Rent</button>

                <ul class="sidebarcategoriestitle">
                    <ul id="property-list" class="property-list">
                        <!-- Items will be populated dynamically -->
                    </ul>
                </ul>
                <!-- Price Filter -->

                <input type="text" id="min-price" placeholder="Min Price" />
                <input type="text" id="max-price" placeholder="Max Price" />

                <h3>Number of Bedrooms</h3>
                <div class="bedroom-options">

                    <label><input type="checkbox" class="bathroom-filter" value="1"> 1 Bath</label><br>
                    <label><input type="checkbox" class="bathroom-filter" value="2"> 2 Baths</label><br>
                    <label><input type="checkbox" class="bathroom-filter" value="3"> 3+ Baths</label><br>
                </div>

                <!-- Bathrooms Filter -->
                <h3>Number of Bathrooms</h3>
                <div class="bathroom-options">
                    <label><input type="checkbox" class="bathroom-filter" value="1"> 1 Bath</label><br>
                    <label><input type="checkbox" class="bathroom-filter" value="2"> 2 Baths</label><br>
                    <label><input type="checkbox" class="bathroom-filter" value="3"> 3+ Baths</label><br>
                </div>

                
                <select id="city-dropdown">
                <h2>Select City for Property</h2>

                    <option value="" disabled selected>Pakistan</option>
                </select>



                <!-- Apply Filter Button -->
                <button onclick="applyFilters()">Apply Filters</button>


            </div>
        </div>
        </div>


        <!-- Main Content -->
        <div class="main-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Address, Neighborhood, City, Zip code" oninput="searchProperties()" />

            </div>

            <!-- Property Cards Grid -->
            <div class="card-grid" id="property-card1">

            </div>
        </div>
        </div>

    </main>


    <script>

        // Call the function to initially render all property cards
        renderPropertyCards(properties);

        // Apply filters based on selected criteria
        function applyFilters() {
            const selectedBedrooms = Array.from(document.querySelectorAll('.bedroom-filter:checked')).map(el => parseInt(el.value));
            const selectedBathrooms = Array.from(document.querySelectorAll('.bathroom-filter:checked')).map(el => parseInt(el.value));
            const minPrice = document.getElementById('min-price').value;
            const maxPrice = document.getElementById('max-price').value;

            // Filter properties based on selected bedrooms, bathrooms, and price range
            const filteredProperties = properties.filter(property => {
                const matchesBedrooms = selectedBedrooms.length === 0 || selectedBedrooms.includes(property.bedrooms) || (property.bedrooms >= 4 && selectedBedrooms.includes(4));
                const matchesBathrooms = selectedBathrooms.length === 0 || selectedBathrooms.includes(property.bathrooms) || (property.bathrooms >= 3 && selectedBathrooms.includes(3));
                const matchesPrice = (!minPrice || property.price >= minPrice) && (!maxPrice || property.price <= maxPrice);
                return matchesBedrooms && matchesBathrooms && matchesPrice;
            });

            renderPropertyCards(filteredProperties);
        }

        // Search properties based on the title or description
        function searchProperties() {
            const query = document.getElementById('search').value.toLowerCase();
            const filteredProperties = properties.filter(property =>
                property.address.toLowerCase().includes(query) ||
                property.description.toLowerCase().includes(query)
            );
            renderPropertyCards(filteredProperties);
        }


        // function for sidebar list 

        // Sample data for Buy and Rent properties

        const propertiesForSale = [, "House", "Apartment", "Land Plot", "Commercial Space", "Townhouse"];
        const propertiesForRent = ["ALL categories", "House", "Apartment", "Office Space", "Studio Apartment", "Retail Space"];

        // Track current property type (default to 'sale')
        let isForSale = true;

        // Function to render the property list dynamically based on type
        function renderPropertyList() {
            const propertyTitle = document.getElementById('property-title');
            const propertyList = document.getElementById('property-list');
            propertyList.innerHTML = ''; // Clear existing list items

            const currentProperties = isForSale ? propertiesForSale : propertiesForRent;
            propertyTitle.textContent = isForSale ? "Properties for Sale" : "Properties for Rent";

            // Populate the property list
            currentProperties.forEach(property => {
                const li = document.createElement('li');
                li.textContent = property;
                propertyList.appendChild(li);
            });
        }

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


        // Fetch and populate cities in the dropdown
        async function populateCitiesDropdown() {
            try {
                const cityDropdown = document.getElementById('city-dropdown');
                // Using mock data instead of API call
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
</body>

</html>