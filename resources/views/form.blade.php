<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .form-container {
        background: #fff;
        padding: 30px;
        margin: auto;
        width: 50%;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        padding: 12px 20px;
        background-color: #5cb85c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }
</style>

<body>
    <div class="form-container">
        <h2>Add New Property</h2>
        <form id="addPropertyForm" action="/submit-property" method="POST">

            <!-- Property Name -->
            <div class="form-group">
                <label for="propertyName">Property Name:</label>
                <input type="text" id="propertyName" name="propertyName" required>
            </div>

            <!-- Property Type -->
            <div class="form-group">
                <label for="propertyType">Property Type:</label>
                <select id="propertyType" name="propertyType" required>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="commercial">Commercial</option>
                    <option value="land">Land</option>
                </select>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>

            <!-- City -->
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>

            <!-- State -->
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
            </div>

            <!-- Zip Code -->
            <div class="form-group">
                <label for="zipCode">Zip Code:</label>
                <input type="text" id="zipCode" name="zipCode" required>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price">Price ($):</label>
                <input type="number" id="price" name="price" required>
            </div>

            <!-- Bedrooms -->
            <div class="form-group">
                <label for="bedrooms">Bedrooms:</label>
                <input type="number" id="bedrooms" name="bedrooms" min="0" required>
            </div>

            <!-- Bathrooms -->
            <div class="form-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" id="bathrooms" name="bathrooms" min="0" required>
            </div>

            <!-- Square Footage -->
            <div class="form-group">
                <label for="squareFootage">Square Footage (sq ft):</label>
                <input type="number" id="squareFootage" name="squareFootage" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5"></textarea>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="imageUpload">Upload Image:</label>
                <input type="file" id="imageUpload" name="imageUpload" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" id="submitBtn">Add Property</button>
            </div>
        </form>
    </div>
</body>

</html>