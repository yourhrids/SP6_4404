<?php
session_start();
include("connect.php");

// DELETE USER
if (isset($_POST['deleteUser'])) {
    $id = $_POST['id'];

    $deleteQuery = "DELETE FROM users WHERE id = '$id'";
    if ($conn->query($deleteQuery)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


// Add product
if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $insertProduct = "INSERT INTO products (name, price, color) VALUES ('$name', '$price', '$color')";
    if ($conn->query($insertProduct)) {
        header("Location: homepage.php");
    } else {
        echo "Error adding product: " . $conn->error;
    }
}

// Update product
if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $updateProduct = "UPDATE products SET name='$name', price='$price', color='$color' WHERE id='$id'";
    if ($conn->query($updateProduct)) {
        header("Location: homepage.php");
    } else {
        echo "Error updating product: " . $conn->error;
    }
}

// Delete product
if (isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];

    $deleteProduct = "DELETE FROM products WHERE id='$id'";
    if ($conn->query($deleteProduct)) {
        header("Location: homepage.php");
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}

// Fetch all products
$productsQuery = "SELECT * FROM products";
$products = $conn->query($productsQuery);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBL</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="images" />
    <!--==================== Remix Icon ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css" />
    <!--==================== External CSS ====================-->
    <link rel="stylesheet" href="./css/homepagecss.css" />
    <link rel="stylesheet" href="./css/developer.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/list.css" />

</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">JBL</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#favorites" class="nav__link">Favorites</a>
                    </li>

                    <li class="nav__item">
                        <a href="logout.php" class="nav__link">Logout <i class="ri-logout-box-r-line"></i></a>
                    </li>


                    <!-- Close Button -->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </ul>
            </div>

            <!-- Toggle Hamburg Menu -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-fill"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">


        <!-- Developer Information Section -->
        <section class="developer section">
            <div class="developer__container container">
                <h2 class="eveloper__name">Developer Information</h2>
                <img src="./assets/img/person.jpg" alt="Developer Image" class="developer__img">
                <h2 class="developer__name">Md. Al-Amin Gazi Ridoy</h2>
                <p class="developer__id">ID: 213-15-4404</p>
                <p class="developer__university">Computer Science & Engineering <br> Daffodil International
                    University(DIU)</p>
                <a href="./assets/CV.pdf" download class="button developer__button">
                    Download CV <i class="ri-download-line"></i>
                </a>
            </div>
        </section>


        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content">
                    <img src="./assets/img/home-img.png" alt="Image" class="home__img" />

                    <h1 class="home__title">
                        <span>J</span>
                        <span>B</span>
                        <span>L</span>
                    </h1>

                    <div class="home__tooltip">
                        <img src="./assets/img/tooltip-right.svg" alt="Tool Image" class="home__tooltip-img" />
                        <span class="home__tooltip-text">$150</span>
                    </div>
                </div>

                <a href="#" class="home__button button">
                    Buy Now <i class="ri-play-circle-fill"></i>
                </a>

                <div class="home__social">
                    <span class="home__social-text">Follow Us</span>
                    <div class="home__social-links">
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link"><i
                                class="ri-instagram-fill"></i></a>
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link"><i
                                class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="home__social-link"><i
                                class="ri-youtube-fill"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        MORE ABOUT US
                    </h2>
                    <p class="about__description">
                        Enjoy award-winning JBL sound with
                        wireless listening freedom and a sleek,
                        streamlined design with comfortable
                        cushioned earcups that deliver premium
                        playback for the user.
                    </p>
                    <a href="#" class="button">
                        Know More<i class="ri-information-fill"></i>
                    </a>
                </div>
                <img src="./assets/img/about-img.png" alt="Image" class="about__img">
            </div>
        </section>

        <!--==================== FAVORITE ====================-->
        <section class="favorite section" id="favorite">
            <h2 class="section__title">
                CHOOSE YOUR FAVORITE
            </h2>
            <div class="favorite__container">
                <div class="favorite__swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="favorite__article swiper-slide">
                            <img src="./assets/img/favorite-1.png" alt="Image" class="favorite__img">
                            <span class="favorite__model">Black Model
                            </span>
                        </article>
                        <article class="favorite__article swiper-slide">
                            <img src="./assets/img/favorite-2.png" alt="Image" class="favorite__img">
                            <span class="favorite__model">White Model
                            </span>
                        </article>
                        <article class="favorite__article swiper-slide">
                            <img src="./assets/img/favorite-3.png" alt="Image" class="favorite__img">
                            <span class="favorite__model">Red Model
                            </span>
                        </article>
                        <article class="favorite__article swiper-slide">
                            <img src="./assets/img/favorite-4.png" alt="Image" class="favorite__img">
                            <span class="favorite__model">Teal Model
                            </span>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== MODEL ====================-->
        <section class="model section" id="model">
            <h2 class="section__title">
                MODEL SPECIFCATIONS
            </h2>

            <div class="model__cntainer container grid">
                <div class="model__content">
                    <img src="./assets/img/model-img.png" alt="Image" class="model__img">
                    <div class="model__tooltip model__tooltip-1">
                        <img src="./assets/img/tooltip-right.svg" alt="" class="model__tooltip-img">
                        <span class="model__tooltip-text">Best Comfort</span>
                    </div>
                    <div class="model__tooltip model__tooltip-2">
                        <img src="./assets/img/tooltip-right.svg" alt="" class="model__tooltip-img">
                        <span class="model__tooltip-text">Easy Adjustment</span>
                    </div>
                    <div class="model__tooltip model__tooltip-3">
                        <img src="./assets/img/tooltip-right.svg" alt="" class="model__tooltip-img">
                        <span class="model__tooltip-text">Fast Charge</span>
                    </div>
                    <div class="model__tooltip model__tooltip-4">
                        <img src="./assets/img/tooltip-right.svg" alt="" class="model__tooltip-img">
                        <span class="model__tooltip-text">Custom Audio</span>
                    </div>
                </div>
            </div>

            <a href="#" class="model__button button">
                Buy Now <i class="ri-play-circle-fill"></i>
            </a>

        </section>

        <!--==================== SPONSOR ====================-->
        <section class="sponsor section">
            <div class="spoonsor__container container grid">
                <img src="./assets/img/sponsor-1.png" alt="image" class="spoonsor-img">
                <img src="./assets/img/sponsor-2.png" alt="image" class="spoonsor-img">
                <img src="./assets/img/sponsor-3.png" alt="image" class="spoonsor-img">
                <img src="./assets/img/sponsor-4.png" alt="image" class="spoonsor-img">
            </div>
        </section>



        <!-- Listing -->
        <section id="product-management" class="section">
            <h2 class="section__title">Product Management</h2>
            <div class="container list-container">
                <!-- Add Product Form -->
                <form method="post" action="" class="form">
                    <h3>Add Product</h3>
                    <input type="text" name="name" placeholder="Product Name" required>
                    <input type="number" step="0.01" name="price" placeholder="Price" required>
                    <input type="text" name="color" placeholder="Color" required>
                    <button type="submit" name="addProduct" class="btn">Add Product</button>
                </form>

                <!-- Product Listing Table -->
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($product = $products->fetch_assoc()) { ?>
                        <tr>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                <td><input type="text" name="name" value="<?php echo $product['name']; ?>" required>
                                </td>
                                <td><input type="number" step="0.01" name="price"
                                        value="<?php echo $product['price']; ?>" required></td>
                                <td><input type="text" name="color" value="<?php echo $product['color']; ?>" required>
                                </td>
                                <td>
                                    <button type="submit" name="updateProduct" class="btn">Update</button>
                                    <button type="submit" name="deleteProduct" class="btn btn-danger">Delete</button>
                                </td>
                            </form>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">JBL</a>
            </div>

            <div class="footer__data grid">
                <div>
                    <h3 class="footer_title">Products</h3>
                    <ul class="footer__links">
                        <li> <a href="" class="footer__link">Headphones</a></li>
                        <li> <a href="" class="footer__link">Earphones</a></li>
                        <li> <a href="" class="footer__link">Earbuds</a></li>
                        <li> <a href="" class="footer__link">Accesories</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer_title">Support</h3>
                    <ul class="footer__links">
                        <li> <a href="" class="footer__link">Product Help</a></li>
                        <li> <a href="" class="footer__link">Register</a></li>
                        <li> <a href="" class="footer__link">Updates</a></li>
                        <li> <a href="" class="footer__link">Provides</a></li>
                    </ul>
                </div>

                <div class="footer__group">

                    <form action="" class="footer__form">
                        <input type="email" placeholder="Email" class="footer__input">
                        <button class="footer__button button">
                            Subscribe <i class="ri-send-plane-fill"></i>
                        </button>
                    </form>


                    <div class="footer__social">
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link"><i
                                class="ri-instagram-fill"></i></a>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i
                                class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="footer__social-link"><i
                                class="ri-youtube-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <span class="footer__copy">
            &#169; All Rights Reserved By Bedimcode
        </span>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>