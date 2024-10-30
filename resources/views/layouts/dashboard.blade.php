<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>

</head>
<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
    }

    /* Navbar Styling */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #333;
        color: #fff;
    }

    .navbar-brand {
        font-size: 1.5rem;
        color: #fff;
        text-decoration: none;
    }

    .navbar-toggler {
        font-size: 1.5rem;
        color: #fff;
        background: none;
        border: none;
        cursor: pointer;
        display: none;
        position: relative;
    }

    .icon-menu,
    .icon-close {
        display: none;
    }

    .icon-menu svg,
    .icon-close svg {
        width: 24px;
        height: 24px;
    }

    /* Show only the hamburger icon by default */
    .icon-menu {
        display: inline-block;
    }

    .navbar-toggler.active .icon-menu {
        display: none;
    }

    .navbar-toggler.active .icon-close {
        display: inline-block;
    }

    .navbar-menu {
        list-style: none;
        display: flex;
        gap: 1.5rem;
    }

    .navbar-menu li a {
        color: #fff;
        text-decoration: none;
        font-size: 1rem;
        transition: color 0.3s;
    }

    .navbar-menu li a:hover {
        color: #f8c500;
    }

    /* Dropdown Styling */
    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #444;
        padding: 0.5rem 0;
        list-style: none;
        border-radius: 0.5rem;
        min-width: 150px;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu li a {
        padding: 0.5rem 1rem;
        display: block;
        color: #fff;
        text-decoration: none;
    }

    .dropdown-menu li a:hover {
        background-color: #555;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .navbar-toggler {
            display: inline-block;
        }

        .navbar-brand {
            display: none;
            /* Hide brand on mobile to show only links */
        }

        .navbar-menu {
            display: none;
            flex-direction: column;
            gap: 0;
            width: 100%;
            background-color: #333;
            padding: 1rem;
        }

        .navbar-menu li {
            margin: 0.5rem 0;
        }

        .navbar-menu.active {
            display: flex;
        }

        .dropdown-menu {
            position: relative;
        }

        .dropdown-menu.active {
            display: block;
        }
    }
</style>


<nav class="navbar">

    <a href="#" class="navbar-brand">MySite</a>
    <button class="navbar-toggler" onclick="toggleMenu()">
        <span class="icon-menu" id="icon-menu">
            <!-- Hamburger Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
        <span class="icon-close" id="icon-close">
            <!-- Cross Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
    </button>
    <ul class="navbar-menu" id="navbar-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown">
            <a href="#services" class="dropdown-toggle">Services ▾</a>
            <ul class="dropdown-menu">
                <li><a href="#service1">Service 1</a></li>
                <li><a href="#service2">Service 2</a></li>
                <li><a href="#service3">Service 3</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<script src="script.js"></script>
</body>

</html>

</nav>

<script>
    // Toggle the navbar menu on smaller screens
    function toggleMenu() {
        const menu = document.getElementById('navbar-menu');
        menu.classList.toggle('active');
    }

    // Toggle the navbar menu on smaller screens
    function toggleMenu() {
        const menu = document.getElementById('navbar-menu');
        const toggler = document.querySelector('.navbar-toggler');

        menu.classList.toggle('active');
        toggler.classList.toggle('active'); // Toggles the icon between hamburger and cross
    }


    // Toggle the dropdown menu
    function toggleDropdown(event) {
        event.preventDefault();
        const dropdownMenu = event.target.nextElementSibling;
        dropdownMenu.classList.toggle('active');
        // Toggle the navbar menu on smaller screens
        function toggleMenu() {
            const menu = document.getElementById('navbar-menu');
            menu.classList.toggle('active');
        }

    }
</script>
</body>

</html>