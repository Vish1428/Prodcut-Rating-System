<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - True Ratings</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        body {
            background-color: #e3f2fd;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }
        .contact-section {
            padding: 40px 0;
        }
        .card {
            margin-bottom: 30px;
        }
        
        .card-body {
            background-color: #ffffff;
        }
        .contact-info p {
            font-size: 18px;
        }
        .tips ul {
            list-style-type: none;
            padding: 0;
        }
        .tips ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .response-time {
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="Images/logo.png" width="270px" height="45px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 
    <div class="container contact-section">
        <h2 class="text-center mb-4">Contact Us</h2>
        
        <div class="row">
          
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact Information</h5>
                    </div>
                    <div class="card-body contact-info">
                        <p><strong>Email:</strong> support@trueratings.com</p>
                        <p><strong>Phone:</strong> +91 98765 43210</p>
                        <p><strong>Address:</strong>  True Ratings Pvt. Ltd.
                                                    Building No. 12, 2nd Floor,
                                                    Jubilee Business Park,
                                                    Sector 45,
                                                    Gurgaon, Haryana - 122018
                                                    India</p>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Business Hours</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>
                        <p><strong>Saturday:</strong> 10:00 AM - 4:00 PM</p>
                        <p><strong>Sunday:</strong> Closed</p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Troubleshooting Tips</h5>
                    </div>
                    <div class="card-body tips">
                        <ul>
                            <li><strong>Can't submit a review?</strong> Make sure you are logged in and that all fields are filled correctly.</li>
                            <li><strong>Rating not showing up?</strong> Refresh your page or check your internet connection.</li>
                            <li><strong>Product page not loading?</strong> Try clearing your browser cache or use a different browser.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Response Time</h5>
                    </div>
                    <div class="card-body">
                        <p>We aim to respond to all inquiries within <span class="response-time">24 hours</span>.</p>
                        <p>If you have any urgent issues, feel free to contact our support team directly via phone during business hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 True Ratings | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
