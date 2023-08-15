<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
        <?php
        include 'menu.php';
        ?>


    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/c-1.jpg" class="d-block w-100" alt="img" width="1100" height="640">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/c-2.jpg" class="d-block w-100" alt="img" width="1100" height="640">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/c-3.jpg" class="d-block w-100" alt="img" width="1100" height="640">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- About US -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Arbaz</h2>
                    <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat quaerat blanditiis, delectus officiis ea velit, numquam, cupiditate aliquid qui corrupti pariatur! Illo quaerat culpa officiis vel, obcaecati sit tempora magnam.</p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/c-2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/c-2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/c-2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Our Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/c-3.jpg" alt="img" class="img-fluid pb-4">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="email" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="phone" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Comment</label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <p class="p-3 bg-dark text-white text-center">@arbaz | Software Developer</p>
    </footer>
</body>

</html>