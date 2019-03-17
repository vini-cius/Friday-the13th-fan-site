<!DOCTYPE html>
<html lang="en">

<head>
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

    <script src="js/script.js"></script>

    <link rel="icon" href="">
    <title>Contact</title>
</head>

<body>

    <?php include "header.php" ?>

    <div class="container">
        <div class="conteudo">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            
            <h1 class="display-4">Contact Us</h1>

            <div class="row">
                <div class="col-md-8">
                    <section>
                        

                        <div id="form">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control mb-2" id="name" maxlength="30">

                                <label for="email">E-mail<span class="text-danger">*</span>:</label>
                                <input type="email" class="form-control mb-2" id="email" maxlength="30">

                                <label for="msg">Message<span class="text-danger">*</span>:</label>
                                <textarea class="form-control mb-2" id="msg" rows="4"></textarea>

                                <button class="btn btn-danger" type="submit" onclick="validationForm()">Send</button>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-4" style="border-left: 1px solid #cdcdcd">
                    <aside>
                        <h6 class="card-header aside-titles">Follow Us</h6>
                        <div class="card-body d-flex justify-content-around">
                            <i style="color: #3B5998;" class="fab fa-facebook fa-3x"></i>
                            <i style="color: #00ACED;" class="fab fa-twitter fa-3x"></i>
                            <i style="color: #DB277B;" class="fab fa-instagram fa-3x"></i>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <footer>
            <?php include "footer.php" ?>
        </footer>

    </div>
    <!--/.container -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 