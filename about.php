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
    <?php include 'menu.php' ?>

    <div class="jumbotron mt-4 p-5 bg-white text-dark rounded">
        <h1>Arbaz Developer</h1>
        <p>Programmer, Entrepreneur</p>
    </div>

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

    <footer>
        <p class="p-3 bg-dark text-white text-center">@arbaz | Software Developer</p>
    </footer>
</body>

</html>