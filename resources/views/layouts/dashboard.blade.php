<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Dashboard</title>
    <link rel="stylesheet" href="css/Dasboard.style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h2>Real Estate Dashboard</h2>
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Sales</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Sign IN</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Welcome, Admin</h1>
                <div class="header-actions">
                    <a href="index.html">
                        <button>Log Out</button>

                    </a>

                </div>
            </header>
            <section class="cards">
                <div class="card">
                    <h3>Total Properties</h3>
                    <p>150</p>
                </div>
                <div class="card">
                    <h3>Properties Sold</h3>
                    <p>45</p>
                </div>
                <div class="card">
                    <h3>New Users</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Total Revenue</h3>
                    <p>$500,000</p>
                </div>
            </section>
            <section class="table">
                <h2>Recent Properties</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Luxury Villa</td>
                            <td>California</td>
                            <td>Sold</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Apartment A1</td>
                            <td>New York</td>
                            <td>Available</td>
                            <td>$450,000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Beach House</td>
                            <td>Florida</td>
                            <td>Available</td>
                            <td>$900,000</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

</body>

</html>