<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce Landing Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tambahkan file CSS sesuai kebutuhan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HappySnack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Snack Tradisional</a></li>
                            <li><a class="dropdown-item" href="#">Snack Modern</a></li>  
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Best Seller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    </header>

    <section class="hero">
    <div class="container text-center">
    <div class="hero-content">
            <h1>Selamat Datang di Happy Snack</h1>
            <p>Snack Favorit mu ada disini</p>
        </div>
    </div>
        
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>

        <div class="product">
            <img src="" alt="Product 1">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$19.99</span>
            <a href="#" class="btn">Add to Cart</a>
        </div>

        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$29.99</span>
            <a href="#" class="btn">Add to Cart</a>
        </div>

        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h3>Product 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$39.99</span>
            <a href="#" class="btn">Add to Cart</a>
        </div>
    </section>

    <section class="newsletter">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay up to date with our latest products and offers.</p>
        <form>
            <input type="email" placeholder="Enter your email" required>
            <button type="submit" class="btn">Subscribe</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
