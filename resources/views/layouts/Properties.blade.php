<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Properties Catalog</title>
    <link rel="stylesheet" href="css/Properties.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <div class="container">
        <!-- Sidebar for Filters -->
        <div class="sidebar">
            <h2>Filter Properties</h2>

            <!-- Property Type Filter -->
            <select>
                <option value="all">Home Types</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="commercial">Commercial</option>
            </select>

            <!-- Price Filter -->
            <input type="text" id="min-price" placeholder="Min Price" />
            <input type="text" id="max-price" placeholder="Max Price" />

            <h3>Number of Bedrooms</h3>
            <div class="bedroom-options">
                <label><input type="checkbox" class="bedroom-filter" value="1"> 1 Bed</label>
                <label><input type="checkbox" class="bedroom-filter" value="2"> 2 Beds</label>
                <label><input type="checkbox" class="bedroom-filter" value="3"> 3 Beds</label>
                <label><input type="checkbox" class="bedroom-filter" value="4"> 4+ Beds</label>
            </div>

            <!-- Bathrooms Filter -->
            <h3>Number of Bathrooms</h3>
            <label><input type="checkbox" class="bathroom-filter" value="1"> 1 Bath</label><br>
            <label><input type="checkbox" class="bathroom-filter" value="2"> 2 Baths</label><br>
            <label><input type="checkbox" class="bathroom-filter" value="3"> 3+ Baths</label><br>

            <!-- Apply Filter Button -->
            <button onclick="applyFilters()">Apply Filters</button>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Address, Neighborhood, City, Zip code" oninput="searchProperties()"
                    style="width: 100%; padding: 10px; box-sizing: border-box;" />
            </div>

            <!-- Property Cards Grid -->
            <div class="card-grid" id="property-cards"></div>
        </div>
    </div>

    <script>
        // Sample data for properties
        const properties = [{
                id: 1,
                title: 'Modern Apartment',
                description: 'Located in the heart of the city.',
                imageUrl: 'https://via.placeholder.com/300x150',
                bedrooms: 1,
                bathrooms: 1
            },
            {
                id: 2,
                title: 'Luxury House',
                description: 'Spacious and beautiful with a large garden.',
                imageUrl: 'https://via.placeholder.com/300x150',
                bedrooms: 3,
                bathrooms: 2
            },
            {
                id: 3,
                title: 'Commercial Space',
                description: 'Ideal location for business.',
                imageUrl: 'https://via.placeholder.com/300x150',
                bedrooms: 0,
                bathrooms: 1
            },
            {
                id: 4,
                title: 'Suburban Family Home',
                description: 'Perfect for families.',
                imageUrl: 'https://via.placeholder.com/300x150',
                bedrooms: 4,
                bathrooms: 3
            },
            // Add more properties here
        ];

        // Function to render property cards
        function renderPropertyCards(data) {
            const cardGrid = document.getElementById('property-cards');
            cardGrid.innerHTML = ''; // Clear existing cards

            data.forEach(property => {
                const card = document.createElement('div');
                card.classList.add('property-card');

                card.innerHTML = `
                    <img src="${property.imageUrl}" alt="Property Image">
                    <h3>${property.title}</h3>
                    <p>${property.description}</p>
                    <p>${property.bedrooms} Bed(s), ${property.bathrooms} Bath(s)</p>
                `;

                cardGrid.appendChild(card);
            });
        }

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
                property.title.toLowerCase().includes(query) ||
                property.description.toLowerCase().includes(query)
            );
            renderPropertyCards(filteredProperties);
        }
    </script>
</body>

</html>