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

            <!-- Carousel for Properties -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="carousel" id="propertyCarousel">
                        <div class="property-card">
                            <img src="https://via.placeholder.com/300x200" alt="Property Image">
                            <h3>Beautiful Apartment</h3>
                            <p>$1,200/month</p>
                        </div>
                    </div>
                    <!-- Add Pagination and Navigation Controls -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>


            <div class="property-card">
                <img src="https://via.placeholder.com/300x200" alt="Property Image">
                <h3>Modern House</h3>
                <p>$3,500/month</p>
            </div>
            <div class="property-card">
                <img src="https://via.placeholder.com/300x200" alt="Property Image">
                <h3>Office Space</h3>
                <p>$2,500/month</p>
            </div>
            <!-- Add more properties as needed -->
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button onclick="prevPage()">1</button>
            <button onclick="nextPage()">2</button>
            <button onclick="nextPage()">3</button>
        </div>
    </div>
    </div>

    <script>
        // Example JavaScript Functions
        function filterProperties() {
            // Implement filtering logic here
            console.log("Filter properties based on selected options.");
        }

        function searchProperties() {
            const query = document.getElementById('search').value.toLowerCase();
            const cards = document.querySelectorAll('.property-card');
            cards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                if (title.includes(query)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function prevPage() {
            // Implement previous page logic here
            console.log("Go to previous page");
        }

        function nextPage() {
            // Implement next page logic here
            console.log("Go to next page");
        }

        document.addEventListener("DOMContentLoaded", function () {
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
            });
        });

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </script>
</body>

</html>