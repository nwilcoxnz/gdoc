<!DOCTYPE html>
<html lang="en">

<!-- red: #ec0309
blue: #082050 -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Glenfield Doctors on Chartwell</title>

    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Cosmo Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style type="text/css">
        #jumbotron{
            background-color: #082050;
            color: white;
        }
        #logo{
            max-height: 200px;
        }
        #shore-care-logo{
            max-width: 280px;
            float: left;
        }
        .bullet-list-centre {
          margin-left: 450px;
          margin-bottom: 20px;
        }
        @media (max-width: 1650px) {
          .bullet-list-centre {
            margin-left: 400px;
          }
        }
        @media (max-width: 1550px) {
          .bullet-list-centre {
            margin-left: 350px;
          }
        }
        @media (max-width: 1350px) {
          .bullet-list-centre {
            margin-left: 300px;
          }
        }
        @media (max-width: 1250px) {
          .bullet-list-centre {
            margin-left: 250px;
          }
        }
        @media (max-width: 650px) {
          .bullet-list-centre {
            margin-left: 50px;
          }
        }
    </style>

</head>

<body>
    <?php include 'navbar.php';?>

    <!-- Jumbotron -->
    <div class="jumbotron col-lg-8 col-lg-offset-2" id="jumbotron">
        <div class="col-md-3">
            <img src="img/logo.jpg" id="logo">
        </div>
        <div class="col-md-8">
            <h1>Welcome</h1>
            <p>Welcome to Glenfield Doctors on Chartwell. We are a family-friendly practice which has been operating in Glenfield, on Auckland's North Shore since 2001.</p>
        </div>
    </div>

    <div class="col-lg-8 col-lg-offset-2">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="text-center header">Patient Portal</div>
                <div class="panel-body text-center">
                    <p>
                        Your own personal 'Patient Portal' is now available:
                        You can sign up easily to make:
                    </p>
                    <ul class="bullet-list-centre text-left">
                        <li>Online appointments</li>
                        <li>Laboratory reports</li>
                        <li>Most x-ray and scan reports</li>
                        <li>Prescription lists and repeat orders</li>
                    </ul>
                        Check in and register your details <a href="https://www.connectmed.co.nz/practice/glenfield-doctors-on-chartwell">here</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php include 'map_panel.php';?>
        </div>
        <div class="col-md-6">
            <?php include 'hours_table.php';?>
        </div>


    </div>
    


   <?php include 'footer.php';?>
    
</body>
</html>