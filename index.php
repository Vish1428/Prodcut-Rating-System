<?php

$conn = new mysqli('localhost', 'root', '', 'product');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['rate'])) {
    $product_id = $_POST['product_id'];
    $rating = $_POST['rating'];
    $sql = "INSERT INTO ratings (product_id, rating) VALUES ($product_id, $rating)";
    $conn->query($sql);
}

$products_query = "SELECT p.*, IFNULL(AVG(r.rating), 0) AS avg_rating
                   FROM products p
                   LEFT JOIN ratings r ON p.id = r.product_id
                   GROUP BY p.id";
$products_result = $conn->query($products_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - True Ratings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color: #e3f2fd;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }
        .product-card { margin-bottom: 20px; }
        .rating { color: gold; }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light">
    
    <a class="navbar-brand" href="#"><img src="Images/logo.png" width="270px" height="45px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutUs.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="contactUs.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>
    
</nav>

<div class="container mt-5">
    <h4>Rate here.. Ratings that matters for your next purchase</h4>
    <div class="row">
        <?php while ($product = $products_result->fetch_assoc()): ?>
            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="<?php echo $product['image_path']; ?>" class="card-img-top" alt="Product Image" width="150px" height="400px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="card-text"><strong>Average Rating:</strong> <?php echo round($product['avg_rating'], 1); ?> / 5</p>
                        <form method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <label for="rating">Rate this product:</label>
                            <select name="rating" class="form-control mb-2" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <button type="submit" name="rate" class="btn btn-success">Submit Rating</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
