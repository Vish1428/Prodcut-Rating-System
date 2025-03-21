<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ture Ratings</title>
    
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
        .about-section{
            padding: 10px 0;
        }
        .card{
            margin-bottom: 30px;
        }
        .card-body {
            background-color: #ffffff;
        }
        .contact-info p {
            font-size: 18px;
        }
        .section-title {
            text-align: center;
            margin-bottom: 30px;
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
                        <a class="nav-link active" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container about-section">
            <h2 class="text-center mb-4">About Us</h2>
            <center><p>We provide a platform where customers can rate and review products to help others make informed decisions.</p></center>

        <div class="row">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"> 
                        <h3>Our Vision</h3>
                    </div>
                    <div class="card-body vision">
                        <p>Our vision is to create a world where every product is rated by those who matter the most—the customers. We believe that sharing experiences and feedback fosters trust, enhances transparency, and helps build a more informed consumer community.</p>
                    </div>
                </div>
            </div>
            
           
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Our Mission</h3>
                    </div>
                    <div class="card-body">
                        <p>Our mission is to provide an easy-to-use and reliable platform for consumers to share their opinions, helping others to make better purchasing decisions. We strive to continuously improve our platform by implementing new features and maintaining the highest standards of user experience and security.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h2>Our Story</h2>
                    </div>
                    <div class="card-body">
                        <p>We started with a simple idea: to provide a platform where product reviews are accessible and trustworthy. Over time, we expanded our features and enhanced the user experience, ensuring that customers could easily rate their favorite products. Today, we are proud to serve a growing community of users who value transparency and consumer-driven insights.</p>
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
 