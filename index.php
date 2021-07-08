<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID DETAILS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bs-example{
            margin: 20px;
        }
        body{
            background-color: #8ADBFF;
        }
        .jumbotron{
            margin-left: 15px;
            margin-right: 15px;
        }
        .text-secondary{
            margin-left: 29px;
        }
        #abc{
            margin-left: 14px;
        }
        #inputEmail{
            margin-left: 13px;
        }
        #myModal{
            margin-left: 410px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">COVID-19 &nbsp; <?php echo date('d-m-Y');?> &nbsp; &nbsp;</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active">Home &nbsp;</a>
                <a href="global.php" class="nav-item nav-link">Global Data &nbsp;</a>
                <a href="country.php" class="nav-item nav-link">Country Wise Data &nbsp;</a>
            </div>
            <form class="form-inline ml-auto">
            <a href="#myModal" role="button" class="btn btn-outline-light" data-toggle="modal">Register</a>

            <!-- Modal HTML -->
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Register</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group row my-2">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label for="inputPassword" class="col-sm-3 col-form-label" id="abc">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
                        </form>
                            <p class="text-secondary"><small>Click on sign up to continue.</small></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </nav>
</div>
<div class="container-md my-3">
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner.png" width="700" height="360" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="images/covidcases__2_.gif" width="700" height="360" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" width="700" height="360" alt="Third Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
</div>
<div class="jumbotron">
    <h1>COVID-19</h1>
    <p class="lead">Updated Covid-19 data available here.</P>
    <p class="lead">
    <ul type="arrow">
    <li>Click on 'Global Data' to get all updated global data about covid-19</li>
    <li>Click on 'Country Wise Data' to get all updated data about covid-19</li>
    </p>
    <p><a href="#" class="btn btn-success btn-lg">Refresh Page</a></p>
</div>
</body>
</html>