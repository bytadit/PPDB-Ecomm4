<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes HTML</title>
    <link rel="shortcut icon" href="/img/logo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,200;0,400;0,700;1,400;1,700;1,900&display=swap"
          rel="stylesheet">
    <!-- End of Google Fonts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<header class="mc-header" id="mc-header">
    <div class="mc-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="mc-site-header">
            <a href="index.html" class="mb-3 mx-auto site-logo">
                <img src="img/logo.png" alt="Logo" width="70px">
            </a>
            <h1 class="text-center site-title">Lara<span class="fw-light">Recipes</span></h1>
        </div>
        <nav class="mc-nav" id="mc-nav">
            <ul>
                <li class="mc-nav-item active"><a href="index.html" class="mc-nav-link">
                    <i class="fas fa-carrot"></i>
                    Home
                </a></li>
                <li class="mc-nav-item"><a href="categories.html" class="mc-nav-link">
                    <i class="fas fa-cubes-stacked"></i>
                    Categories
                </a></li>
                <li class="mc-nav-item"><a href="single-category.html" class="mc-nav-link">
                    <i class="fas fa-cubes-stacked"></i>
                    Single Category
                </a></li>
                <li class="mc-nav-item"><a href="single-recipe.html" class="mc-nav-link">
                    <i class="fas fa-bowl-food"></i>
                    Single Recipe
                </a></li>
                <li class="mc-nav-item"><a href="about.html" class="mc-nav-link">
                    <i class="fas fa-lemon"></i>
                    About Us
                </a></li>
                <li class="mc-nav-item"><a href="contact.html" class="mc-nav-link">
                    <i class="fas fa-utensils"></i>
                    Contact Us
                </a></li>
            </ul>
        </nav>
        <div class="mc-mb-65">
            <a href="https://x.com/mkwsra" class="mc-social-link">
                <i class="fab fa-x-twitter mc-social-icon"></i>
            </a>
            <a href="https://linkedin.com/in/mkwsra" class="mc-social-link">
                <i class="fab fa-linkedin-in mc-social-icon"></i>
            </a>
            <a rel="nofollow" href="https://fb.com/mkwsra" class="mc-social-link">
                <i class="fab fa-facebook-f mc-social-icon"></i>
            </a>
            <a href="https://instagram.com/multicaret" class="mc-social-link">
                <i class="fab fa-instagram mc-social-icon"></i>
            </a>
        </div>
        <p class="pr-5 text-white">
            Lara Recipes a demo of a Laravel tutorial created by
            <a href="https://mkwsra.com" class="text-dark">Mo Kawsara</a>
            using the Xtra Blog html5 theme as a
            foundation, this theme got tweaked for the purposes of this tutorial.
        </p>
        <p class="mc-mb-80 text-white">If you liked this tutorial, consider helping me out by sharing this video series
            with others and perhaps by
            liking my <a href="https://www.youtube.com/@multi-caret" target="_blank" class="text-dark">YouTube
                videos</a></p>
    </div>
</header>
<div class="mc-main-full">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                    aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="w-100" src="img/3.jpeg" alt="">
                <div class="container carousel-item-content img-overlay">
                    <div class="carousel-caption text-start">
                        <h1>Chocolate Chip Cookies</h1>
                        <p>Some representative placeholder content for the first slide of the
                            carousel.</p>
                        <a class="btn btn-outline-light px-4" href="#">Get Cooking</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="w-100" src="img/4.jpeg" alt="">
                <div class="container carousel-item-content img-overlay">
                    <div class="carousel-caption">
                        <h1>Delicious Falafel Recipe (Fried or Baked)</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <a class="btn btn-outline-light px-4" href="#">Get Cooking</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/1.jpeg" alt="">
                <div class="container carousel-item-content img-overlay">
                    <div class="carousel-caption text-end">
                        <h1>Peanut Butter and Jelly</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <a class="btn btn-outline-light px-4" href="#">Get Cooking</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container-fluid">
    <main class="mc-main">

        <!-- Search form -->
        <div class="row">
            <div class="col-12">
                <form method="GET" class="form-inline mc-mb-20 mc-search-form">
                    <input class="form-control mc-search-input w-100" name="query" type="text" placeholder="Search..."
                           aria-label="Search">
                    <button class="mc-search-button" type="submit">
                        <i class="fas fa-search mc-search-icon" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>


        <div class="container px-4 py-5">
            <h2 class="pb-2 mb-2 border-bottom d-flex justify-content-between">
                LATEST RECIPES
            </h2>
            <div class="row">
                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/5.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Macaroni & cheese</h2>
                    </a>
                    <div class="d-flex justify-content-between">
                        <span class="mc-color-primary">Side Dish</span>
                    </div>
                </article>

                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/3.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Chocolate Chip Cookies</h2>
                    </a>
                    <div class="d-flex justify-content-between">
                        <span class="mc-color-primary">Must Have</span>
                    </div>
                </article>


            </div>
        </div>

        <div class="container px-4 py-5">
            <h2 class="pb-2 mb-2 border-bottom d-flex justify-content-between">
                Quick & Easy
                <a href="#!" class="btn btn-outline-dark">Browse All</a>
            </h2>
            <div class="row">
                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/1.jpeg" alt="Peanut Butter and Jelly" class="img-fluid">
                        </div>
                        <span class="position-absolute mc-new-badge">
                        <i class="fas fa-certificate"></i>
                        Featured
                    </span>
                    </a>
                    <a href="single-recipe.html">
                        <h2 class="mc-pt-20 mc-post-title">Peanut Butter and Jelly</h2>
                    </a>
                </article>

                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/2.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Buffalo Wings</h2>
                    </a>
                </article>

                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/3.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Chocolate Chip Cookies</h2>
                    </a>
                </article>

                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link">
                        <div class="mc-post-link-inner">
                            <img src="img/5.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Macaroni & cheese</h2>
                    </a>
                </article>

            </div>
        </div>

        <div class="container px-4 py-5">
            <h2 class="pb-2 mb-2 border-bottom d-flex justify-content-between">
                Middle Eastern
                <a href="#!" class="btn btn-outline-dark">Browse All</a>
            </h2>
            <div class="row">
                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link mc-pt-20">
                        <div class="mc-post-link-inner">
                            <img src="img/6.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Chicken Shawarma (Middle Eastern)</h2>
                    </a>
                </article>

                <article class="col-12 col-md-6 col-lg-3">
                    <a href="single-recipe.html" class="effect-lily mc-post-link mc-pt-20">
                        <div class="mc-post-link-inner">
                            <img src="img/4.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="mc-pt-30 mc-post-title">Delicious Falafel Recipe (Fried or Baked)</h2>
                    </a>
                </article>

            </div>

            <div class="row mt-5">
                <a href="#!" class="btn w-100 btn-outline-dark btn-xs px-4">View All Categories</a>
            </div>
        </div>


        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">DID YOU MAKE THIS RECIPE?</h1>
                    <p class="lead">I love hearing how you went with my recipes! Tag me on Instagram at
                        <a href="https://instagram.com/multicaret" target="_blank">@multicaret</a>.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="https://instagram.com/multicaret" target="_blank"
                           class="btn btn-outline-secondary px-4">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="img/instagram-cta.avif" alt="" width="520">
                </div>
            </div>
        </div>


        <!--<footer class="row">
            <hr class="col-12">
            <div class="col-md-6 col-12 mc-color-gray">
                Developed with 🤩️ by <a rel="nofollow" target="_parent" href="#!" class="mc-external-link">Your Name
                Here Dear Laravel Developer</a>
            </div>
            <div class="col-md-6 col-12 mc-color-gray mc-copyright">
                Copyleft 2023 Lara Recipes Ltd.
            </div>
        </footer>-->
    </main>
    <footer class="mc-main pt-5 mt-5 border-top">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
            <div class="col">
                <a href="#!"
                   class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none site-logo">
                    <div class="mc-site-header">
                        <img src="img/logo.png" alt="Logo" width="70px">
                        <h3 class="text-center site-title">
                            Lara<span class="fw-light">Recipes</span>
                        </h3>
                    </div>
                </a>
                <p class="text-body-secondary">
                    Laravel Tutorial by <a href="https://x.com/mkwsra" target="_blank">
                    Mo Kawsara
                </a>
                </p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Categories</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Category 1 <small>(12 recipes)</small>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Category 2 <small>(7 recipes)</small>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Category 3 <small>(6 recipes)</small>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Category 4 <small>(6 recipes)</small>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Category 5 <small>(4 recipes)</small>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Featured Recipes</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Recipe title 1
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Recipe title 2
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Recipe title 3
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Recipe title 4
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">
                            Recipe title 5
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Useful Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Search
                        Categories</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Search
                        Recipes</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Most Viewed
                        Recipe</a></li>
                    <li class="nav-item mb-2"><a href="faq.html" class="nav-link p-0 text-body-secondary">FAQs</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav justify-content-center border-bottom border-top mt-2">
            <li class="nav-item"><a href="terms.html" class="nav-link px-2 text-body-secondary">Terms &
                Conditions</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Privacy Policy</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Photo Usage Policy</a></li>
        </ul>
        <div class="row">
            <div class="col-md-6 col-12 mc-color-gray">
                Developed with 🤩️ by <a rel="nofollow" target="_parent" href="#!" class="mc-external-link">Put Your
                Name
                Here Dear Laravel Developer</a>
            </div>
            <div class="col-md-6 col-12 mc-copyright">
                <p class="text-body-secondary">© 2023 Multicaret, Inc</p>
            </div>
        </div>
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>

<script src="js/scripts.js"></script>
</body>
</html>