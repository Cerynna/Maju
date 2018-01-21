<!DOCTYPE html>
<html lang="fr" class="full-height">
<head>
    <meta charset="UTF-8">
    <title>Maju</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
<div id="particles-js"></div>
<header>
    <h1>
        Maju
        <p>et son petit bazar</p>
    </h1>

</header>
<!--<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-inverse p-4">
            <h4 class="text-white">Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <nav class="navbar navbar-inverse bg-inverse">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>-->

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" href="?page=0"><i class="fas fa-home"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=1">Style 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=2">Style 2</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown">Categorie</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="?page=3">Catégorie 1</a>
            <a class="dropdown-item" href="?page=3">Catégorie 2</a>
            <a class="dropdown-item" href="?page=3">Catégorie 3</a>
        </div>

    </li>
    <!--<li class="nav-item">
        <a class="nav-link" href="?page=4">Link</a>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#contact"><i class="fas fa-comment"></i> Contact</a>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>-->
</ul>
<div class="container">

    <?php
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 0;
    }

    switch ($page) {
    case 1 :
    ?>
    <div class="content">
        <div class="card">
            <img class="card-img-top" src="assets/img/image3.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/image4.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/image5.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/image6.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/image7.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/image8.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="assets/img/image9.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p>Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
                <div class="text-right">
                    <a href="#" class="btn btn-blue">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
break;
case 2 :
    ?>
    <div class="row">
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image23.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image24.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image25.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image26.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image27.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image28.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image29.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image30.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image31.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
        <div class="col card-3">
            <div class="card-img" style="background-image: url('assets/img/image32.jpg')">
                <p>
                    <span>sdqghy</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, assumenda culpa dolorem dolores
                    fugit ipsam officia omnis rem suscipit temporibus! Accusamus asperiores id, in iure iusto obcaecati
                    praesentium quam ullam?</p>
            </div>
        </div>
    </div>
    <?php
    break;
case 3 :
    ?>
    <h2>@Categorie</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        ?>

        <div class="card">


            <?php
            if ($i % 2 === 0) {
                ?>
                <div class="row">
                    <div class="col-4">
                        <div class="card-img" style="background-image: url('assets/img/image<?php echo $i; ?>.jpg')">
                        </div>
                    </div>
                    <div class="col card-text">
                        <h3>@Title Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam aliquid,
                            assumenda
                            beatae consequuntur cupiditate deserunt dicta et exercitationem fugiat minima molestias
                            nihil,
                            non
                            numquam praesentium quis ratione tempora ullam.</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <a href="#" class="btn btn-blue">Go somewhere</a>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="row">
                    <div class="col card-text">
                        <h3>@Title Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam aliquid,
                            assumenda
                            beatae consequuntur cupiditate deserunt dicta et exercitationem fugiat minima molestias
                            nihil,
                            non
                            numquam praesentium quis ratione tempora ullam.</p>

                    </div>
                    <div class="col-4">
                        <div class="card-img" style="background-image: url('assets/img/image<?php echo $i; ?>.jpg')">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <a href="#" class="btn btn-blue">Go somewhere</a>
                    </div>
                </div>
                <?php
            }
            ?>



        </div>
        <?php
    }
    ?>
    <div class="row">
        <div class="col-12">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>

    <?php
    break;
case 4 :
    echo "page 4";
    break;
case 5 :
    echo "page 5";
    break;
case 0 :
default:
    ?>
    <div class="container-carousel">
        <div id="carouselHome" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('assets/img/headernadia.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('assets/img/headernadia.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('assets/img/headernadia.jpg')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php
    break;
}
?>

</div>

<div class="modal fade" id="contact">
    <form>

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Contactez moi</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="name">Votre nom/prenom</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="message"> Message</label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col text-left">
                            <button type="submit" class="btn btn-blue">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-blue" data-dismiss="modal">Close</button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </form>
</div>
<footer>
    <div class="text-right">
        <a href="#" class="btn btn-blue">Go somewhere</a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>

<script src="assets/js/particles.min.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>


<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 160,
                "density": {"enable": true, "value_area": 800}
            },
            "color": {"value": "#001eff"},
            "shape": {
                "type": "circle"

            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {"enable": true, "speed": 1, "opacity_min": 0, "sync": false}
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {"enable": false, "speed": 4, "size_min": 0.3, "sync": false}
            },
            "line_linked": {"enable": false, "distance": 150, "color": "#FFFFFF", "opacity": 0.4, "width": 1},
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "x}",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {"enable": false, "rotateX": 600, "rotateY": 600}
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {"enable": true, "mode": "bubble"},
                "onclick": {"enable": true, "mode": "repulse"},
                "resize": true
            },
            "modes": {
                "grab": {"distance": 400, "line_linked": {"opacity": 1}},
                "bubble": {"distance": 250, "size": 0, "duration": 2, "opacity": 0, "speed": 3},
                "repulse": {"distance": 400, "duration": 0.4},
                "push": {"particles_nb": 4},
                "remove": {"particles_nb": 2}
            }
        },
        "retina_detect": true
    });


</script>

</body>
</html>


