<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Properties Catalog</title>
    <link rel="stylesheet" href="css/Properties.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        /* Basic styling for container, sidebar, and main content */
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .sidebar {
            flex: 1 1 200px;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .main-content {
            flex: 3 1 600px;
            padding: 20px;
        }

        /* Responsive card grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .property-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .property-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .property-card h3 {
            margin: 10px;
            font-size: 18px;
        }

        .property-card p {
            margin: 0 10px 10px;
            color: #555;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                order: 2;
            }

            .main-content {
                order: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar for Filters -->
        <div class="sidebar">
            <h2>Filter Properties</h2>
            <select>
                <option value="all">All Types</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="commercial">Commercial</option>
            </select>
            <input type="text" placeholder="Min Price" />
            <input type="text" placeholder="Max Price" />
            <button onclick="filterProperties()">Apply Filters</button>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search properties..." oninput="searchProperties()"
                    style="width: 100%; padding: 10px; box-sizing: border-box;" />
            </div>

            <!-- Property Cards Grid -->
            <div class="card-grid" id="property-cards"></div>
        </div>
    </div>

    <script>
        // Sample data for properties
        const properties = [
            { id: 1, title: 'Modern Apartment ist', description: 'Located in the heart of the city.', imageUrl: 'https://via.placeholder.com/300x150' },
            { id: 2, title: 'Luxury House', description: 'Spacious and beautiful with a large garden.', imageUrl: 'https://via.placeholder.com/300x150' },
            { id: 3, title: 'Commercial Space', description: 'Ideal location for business.', imageUrl: 'https://via.placeholder.com/300x150' },
            // Add more property objects here as needed
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
                `;

                cardGrid.appendChild(card);
            });
        }

        // Call the function to initially render the cards
        renderPropertyCards(properties);

        function filterProperties() {
            console.log("Filter properties based on selected options.");
            // You can add filtering logic here based on user inputs
        }

        function searchProperties() {
            const query = document.getElementById('search').value.toLowerCase();
            const filteredProperties = properties.filter(property =>
                property.title.toLowerCase().includes(query)
            );
            renderPropertyCards(filteredProperties);
        }
    </script>
</body>

</html>
