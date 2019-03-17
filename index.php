<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Normalize CSS -->
  <link rel="stylesheet" href="css/normalize.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

  <!--Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!--Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->

  <link rel="icon" href="imagens/favicon_jason.png">
  <title>Friday The 13th: Fan Site</title>
</head>

<body>

<?php include "header.php" ?>

  <section class="d-flex" id="carousel">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div id="carousel-principal" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="imagens/friday_the13_game_banner.jpg" alt="" usemap="#Map" class="img-fluid">
                <map name="Map">
                  <area shape="rect" coords="547,198,972,253" href="#" target="_blank" alt="More Information">
                </map>
              </div>

              <div class="carousel-item">
                <img src="imagens/book_banner.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <!--/.inner -->

            <!-- controles -->
            <a href="#carousel-principal" class="carousel-control-prev" data-slide="prev">
              <i class="fas fa-angle-left fa-2x"></i>
            </a>

            <a href="#carousel-principal" class="carousel-control-next" data-slide="next">
              <i class="fas fa-angle-right fa-2x"></i>
            </a>
          </div>
          <!--/.carousel -->

        </div>
        <!--/.col -->
      </div>
    </div>
  </section>

  <div class="container">
    <div class="conteudo">
      <div class="row">
        <div class="col-md-8">
          <section>
            <h6 class="section-title">Last News</h6>

            <div class="box-news">
              <ul>
                <li>
                  <img src="imagens/news/04_03_2019_capa.jpg" class="img-fluid" alt="">
                  <h5><a href="">Friday The 13th: The Game Coming To Nintendo Switch This Spring</a></h5>
                  <span class="news-data"><small>Vinicius Santos • March 04, 2019</small></span>
                  <p>
                    Friday The 13th: The Game may no longer be adding new content to it’s gameplay, but the game’s
                    producer will be adding a new console to th...
                  </p>
                  <a class="btn btn-sm btn-danger" href="">READ MORE</a>
                </li>

                <li>
                  <img src="imagens/news/26_02_2019_capa.jpg" class="img-fluid" alt="">
                  <h5><a href="">Artist Crash Cunningham Recreates Iconic Mask From Original Friday The 13th Part 3
                      Novelization</a></h5>
                  <span class="news-data"><small>Vinicius Santos • February 26, 2019</small></span>
                  <p>
                    There were two official movie novelizations created for Friday The 13th Part 3 . Simon Hawke
                    adapted a number of the films in 1988, includ...
                  </p>
                  <a class="btn btn-sm btn-danger" href="">READ MORE</a>
                </li>

                <li>
                  <img src="imagens/news/16_02_2019_capa.jpg" class="img-fluid" alt="">
                  <h5><a href="">Ultimate Roy Burns Figure From ‘Friday The 13th: A New Beginning’ Revealed!</a></h5>
                  <span class="news-data"><small>Vinicius Santos • February 16, 2019</small></span>
                  <p>
                    The New York Toy Fair 2019 has begun and as promised, NECA has unveiled so unbelievable figures.
                    One figure we were really hoping to see is ...
                  </p>
                  <a class="btn btn-sm btn-danger" href="">READ MORE</a>
                </li>

                <li>
                  <img src="imagens/news/15_02_2019_capa.jpg" class="img-fluid" alt="">
                  <h5><a href="">Meet ‘The Final Chapter’ Actor Lawrence Monoson This Fall</a></h5>
                  <span class="news-data"><small>Vinicius Santos • February 15, 2019</small></span>
                  <p>
                    Every Friday The 13th fan enjoys Lawrence Monoson’s character Ted (aka Teddy Bear) in The Final
                    Chapter. His portrayal was a quick departure...
                  </p>
                  <a class="btn btn-sm btn-danger" href="">READ MORE</a>
                </li>
              </ul>
            </div>
            <div class="d-flex justify-content-end">
              <a class="btn btn-outline-danger" href="">See More <i class="far fa-hand-point-right"></i></a>
            </div>
          </section>
        </div>
        <!--/.col -->

        <div class="col-md-4" style="border-left: 1px solid #cdcdcd">
          <aside>
            <h6 class="aside-titles card-header">NEWSLETTER <i class="fas fa-rss"></i></h6>
            <div class="card-body">
              <p>SUBSCRIBE TO OUR NEWSLETTER TODAY!</p>
              <form>
                <div class="form-group">
                  <label for="email">Enter your email address:</label>
                  <input class="form-control form-control-sm" type="email" id="email" placeholder="E-mail">
                  <button type="submit" class="btn btn-sm btn-dark mt-2">Subscribe</button>
                </div>
              </form>
            </div>

            <h6 class="aside-titles card-header">POPULAR STORIES <i class="fas fa-fire"></i></h6>

            <ul class="mt-3" id="popular-news">
              <li>
                <a href="">
                  <img src="imagens/news/16_02_2019_capa.jpg" width="120" alt="">
                  <p>Ultimate Roy Burns Figure From ‘Friday The 13th: A New Beginning’ Revealed!</p>
                  <span class="news-data"><small>March 4, 2019</small></span>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="imagens/news/16_02_2019_capa.jpg" width="120" alt="">
                  <p>Ultimate Roy Burns Figure From ‘Friday The 13th: A New Beginning’ Revealed!</p>
                  <span class="news-data"><small>March 4, 2019</small></span>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="imagens/news/16_02_2019_capa.jpg" width="120" alt="">
                  <p>Ultimate Roy Burns Figure From ‘Friday The 13th: A New Beginning’ Revealed!</p>
                  <span class="news-data"><small>March 4, 2019</small></span>
                </a>
              </li>
            </ul>

          </aside>
        </div>
        <!--/.col -->
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div id="footer">
        <div class="row">
          <div class="col-md-4 text-center mt-4">
            <h5><strong>Follow Us</strong></h5>

            <div>
              <a href="">
                <i style="color: #3B5998;" class="fab fa-facebook-square fa-3x"></i>
              </a>
              <a href="">
                <i style="color: #00ACED;" class="fab fa-twitter-square fa-3x"></i>
              </a>
              <a href="">
                <i style="color: #DB277B;" class="fab fa-instagram fa-3x"></i>
              </a>
            </div>
          </div>

          <div class="col-md-4" id="footer-section1">
            <h6 class="border-bottom d-inline">CRYSTAL LAKE MEMORIES EBOOK</h6>
            <a href="">
              <img src="imagens/CrystalLakeMemories_ebook_banner.jpg" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-md-4" id="footer-section2">
            <h6 class="border-bottom d-inline">FRIDAY THE 13th DOCUMENTARY</h6>
            <a href="">
              <img src="imagens/CrystalLakeMemories_Splash_withclock.jpg" class="img-fluid" alt="">
            </a>
          </div>

        </div><!-- /.Row -->
      </div>

      <?php include "footer.php" ?>

    </div>
    </div>
    </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>