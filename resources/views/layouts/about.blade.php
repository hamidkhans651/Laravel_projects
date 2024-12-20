<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Real Estate Website</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="about-page">

        <header>

            <a href="{{ route('about') }}">
                <h1>About Us</h1>

            </a>

            <p>Discover who we are, what we do, and how we can help you find your dream property.</p>
        </header>

        <!-- Mission Section -->
        <section class="mission">
            <h2>Our Mission</h2>
            <p>Our mission is to provide exceptional real estate services that help our clients find and secure their
                ideal properties with ease and confidence.</p>
        </section>

        <!-- History Section -->
        <section class="history">
            <h2>Our History</h2>
            <p>Founded in 2010, our company has grown from a small real estate office into a full-service agency with a
                reputation for integrity and customer service. With over a decade of experience, we’ve helped hundreds
                of clients buy, sell, and rent properties in prime locations.</p>
        </section>

        <!-- Services Section -->
        <section class="services">
            <h2>What We Offer</h2>
            <div class="service-list">
                <div class="service-item">
                    <h3>Property Sales</h3>
                    <p>We offer expert assistance in buying and selling residential and commercial properties, ensuring
                        smooth transactions every step of the way.</p>
                </div>
                <div class="service-item">
                    <h3>Rentals</h3>
                    <p>Our team helps you find the perfect rental property that matches your needs and budget, whether
                        it's a cozy apartment or a luxury house.</p>
                </div>
                <div class="service-item">
                    <h3>Consulting</h3>
                    <p>We provide tailored real estate consulting services, helping clients make informed decisions
                        regarding investments and property management.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h3>John Doe</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h3>Jane Smith</h3>
                    <p>Chief Operating Officer</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h3>Alex Johnson</h3>
                    <p>Head of Sales</p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>