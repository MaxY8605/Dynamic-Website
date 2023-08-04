<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <title>Bhargav</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Places</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/river.jpeg" class="d-block w-100" alt="River">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>River</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/snow.jpg" class="d-block w-100" alt="Snow">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Snow</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/mountains.jpg" class="d-block w-100" alt="Mountains">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mountains</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/bird.jpg" class="img-fluid aboutimg">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-4">Forest</h2>
                        <p class="py-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio veniam
                            voluptatem
                            aspernatur recusandae atque aperiam at, possimus eum, rerum dignissimos delectus
                            consequuntur animi sed, labore libero dolorem sint nesciunt provident!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio veniam voluptatem
                            aspernatur recusandae atque aperiam at, possimus eum, rerum dignissimos delectus
                            consequuntur animi sed, labore libero dolorem sint nesciunt provident!</p>
                        <a href="about.php" class="btn btn-success"> Check More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Animals</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                            <img class="card-img-top" src="images/animal1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Lion</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                            <img class="card-img-top" src="images/animal1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Lion</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="images/animal1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Lion</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Form</h2>
            </div>

            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" autocomplete="off" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" name="email" class="form-control" autocomplete="off" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="mobile">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <input type="text" name="comments" class="form-control" autocomplete="off" placeholder="comments">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>

        <footer>
            <h3 class="p-3 bg-dark text-white">Dynamic Website</h3>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
    </body>

</html>