<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Properties Catalog</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik&display=swap">
</head>

<body>
    <nav>
        <!-- Toggle Menu Checkbox -->
        <input type="checkbox" id="check" />
        <!-- Menu Label with SVG Icon -->
        <label for="check" class="menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </label>
        
        <div class="logo">
            <h3>Real Estate</h3>
        </div>

        <!-- Navigation Menu -->
        <div class="nav-items">
            <ul class="overview">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="#">Rates</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="account">
                <li><a href="{{ route('register') }}">Sign In</a></li>
                <li><a href="#">Agents</a></li>
            </ul>
        </div>
    </nav>
    <style>
        /* General Styles */
        body {
            font-family: 'Rubik', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar styles */
        nav {
            background: #333;
            color: rgb(220, 220, 220);
            padding: 1rem;
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo h3 {
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .nav-items {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .overview {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex: 1;
        }

        .account {
            display: flex;
            gap: 1.5rem;
            justify-content: flex-end;
        }

        nav a {
            text-decoration: none;
            color: rgb(220, 220, 220);
            position: relative;
        }

        nav a:hover {
            color: #a0ebfd;
        }

        /* Hover underline effect */
        nav a::after {
            content: "";
            display: block;
            height: 2px;
            background: #a0ebfd;
            width: 0%;
            transition: width 0.3s ease-in-out;
            position: absolute;
            left: 0;
            bottom: -5px;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Responsive Toggle and Hamburger Menu */
        #check {
            display: none;
        }

        .menu {
            display: none;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            nav {
                grid-template-columns: auto auto;
                padding: 1rem 2rem;
            }

            .logo {
                margin-right: auto;
            }

            .nav-items {
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                width: 250px;
                flex-direction: column;
                justify-content: center;
                background: #333;
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
                z-index: 99;
            }

            #check:checked ~ .nav-items {
                transform: translateX(0);
            }

            .overview,
            .account {
                flex-direction: column;
                gap: 1.5rem;
                width: 100%;
                text-align: center;
            }

            .menu {
                display: inline-block;
                cursor: pointer;
                color: white;
                font-size: 1.8rem;
                position: relative;
                z-index: 100;
            }
        }
    </style>
</body>

</html>
