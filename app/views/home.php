<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="public/Assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="public/Assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .form-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-button-container {
            text-align: center; /* Center text */
        }   
        .media-container {
            display: flex;
            flex-direction: row; /* Display image and video side by side */
            align-items: center;
            justify-content: center;
            gap: 2rem; /* Add space between image and video */
        }

        .responsive-media {
            width: 500px;
            height: 450px;
        }
        .button-container {
            margin-top: 1rem; /* Add some space above the button */
            text-align: center;
        }

    </style>
</head>

<body>

    <div class="container form-container">
        <div class="image-button-container">
            <h1>Bini Mikha</h1>
            <h3>My Bias on BINI</h3>
            <div class="media-container">
                <img src="public/images/mikhamot.jpg" class="responsive-media" alt="Movie Poster">
                <!-- Add your video here -->
                <video class="responsive-media" controls>
                    <source src="public/images/mikha.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="button-container">
                <a href="/" class="btn btn-primary text-light text-decoration-none">Go Back to Login Page</a>
            </div>
        </div>
    </div>
</body>

</html>
