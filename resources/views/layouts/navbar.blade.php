<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <a href="#" class="navbar-brand">MySite</a>
        <button class="navbar-toggler" onclick="toggleMenu()">☰</button>
        <ul class="navbar-menu" id="navbar-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown">
                <a href="#services" class="dropdown-toggle" onclick="toggleDropdown(event)">Services ▾</a>
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
