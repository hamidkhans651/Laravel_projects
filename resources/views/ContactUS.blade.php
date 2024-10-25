<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Real Estate Website</title>
    <link rel="stylesheet" href="css/Contact.style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div class="contact-page">
        <header>
            <h1>Contact Us</h1>
            <p>We would love to hear from you! Please fill out the form below or reach us through the following details.</p>
        </header>

        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="contact-details">
                <h2>Our Office</h2>
                <p>123 Real Estate Ave,<br>City Name, State, 12345</p>
                <p>Email: info@realestate.com</p>
                <p>Phone: (123) 456-7890</p>

                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
