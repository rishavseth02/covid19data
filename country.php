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
            background-color: #C8CBD4;
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
                <a href="index.php" class="nav-item nav-link">Home &nbsp;</a>
                <a href="global.php" class="nav-item nav-link">Global Data &nbsp;</a>
                <a href="country.php" class="nav-item nav-link active">Country Wise Data &nbsp;</a>
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
    <table class="table table-striped table-dark">
    <thead>
        <tr>
            <th colspan="8">Counrty Data
            <select name="s1" id="s1" class="form-control col-sm-5">
            </th>
        </tr>
        <tr>
            <th>Country Name</th>
            <th>Flag</th>
            <th>Country Code</th>
            <th>New Confirmed</th>
            <th>Total Confirmed</th>
            <th>New Deaths</th>
            <th>Total Deaths</th>
            <th>New Recovered</th>
            <th>Total Recovered</th>
        </tr>
    </thead>
    <tbody id="country-data">
        
    </tbody>
    </table>
    <script>
    $.ajax({
        url:"https://api.covid19api.com/summary",
        type:"GET",
        dataType:"JSON",
        success:function(data)
        {
            var s="<option value='0'>Select</option>";
            $.each(data.Countries,function(key,value){
                $("#country-data").append("<tr>"+
                                            "<td>"+value.Country+"</td>"+
                                            "<td><img src='https://www.countryflags.io/"+value.CountryCode+"/flat/64.png'></td>"+
                                            "<td>"+value.CountryCode+"</td>"+
                                            "<td>"+value.NewConfirmed+"</td>"+
                                            "<td>"+value.TotalConfirmed+"</td>"+
                                            "<td>"+value.NewDeaths+"</td>"+
                                            "<td>"+value.TotalDeaths+"</td>"+
                                            "<td>"+value.NewRecovered+"</td>"+
                                            "<td>"+value.TotalRecovered+"</td>"+
                                            "</tr>");
                                            s+="<option value='"+value.Country+"'>"+value.Country+"</option>";
            
            });
            $("#s1").append(s);
        }
    });
    
</script>
</div>
</body>
</html>