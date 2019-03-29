<!doctype html>
<html lang="en">

<head>
    <title>Gallery</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->

</head>

<body>
    <?php include "header.php" ?>

    <div class="container">
        <div class="conteudo">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>

            <h6 class="section-title mb-3">Production Still Gallery</h6>

            <div class="row text-center" id="gallery">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card border-0 shadow" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        <a href="#" class="d-block h-100">
                            <img class="img-fluid" src="imagens\gallery\friday-the-13th-movie-poster.jpg" alt="">
                        </a>
                        <div class="card-body text-center">
                            <div class="card-text font-weight-bold">Friday The 13th 1980 Production Still Gallery</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card border-0 shadow">
                        <a href="#" class="d-block h-100">
                            <img class="img-fluid" src="imagens\gallery\partII-movie-poster.jpg" alt="">
                        </a>
                        <div class="card-body text-center">
                            <div class="card-text font-weight-bold">Friday The 13th Part 2 Production Still Gallery</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card border-0 shadow">
                        <a href="#" class="d-block h-100">
                            <img class="img-fluid" src="imagens\gallery\part3-movie-poster.jpg" alt="">
                        </a>
                        <div class="card-body text-center">
                            <div class="card-text font-weight-bold">Friday The 13th Part 3 Production Still Gallery</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card border-0 shadow">
                        <a href="#" class="d-block h-100">
                            <img class="img-fluid" src="imagens\gallery\part4-movie-poster.jpg" alt="">
                        </a>
                        <div class="card-body text-center">
                            <div class="card-text font-weight-bold">Friday The 13th Part 4 Production Still Gallery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.conteudo -->

        <footer>
            <?php include "footer.php" ?>
        </footer>
    </div>
    <!--/.container -->

    <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Friday The 13th 1980 Production Still Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://picsum.photos/800/400?random" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos/800/400/?random" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos/800/400/?random" alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 