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

    <!-- Extra Styling -->
    <link href="css/custom_style.css" rel="stylesheet">

</head>

<body>
    <?php include 'navbar.php';?>

    <!-- Jumbotron -->
    <div class="jumbotron" id="jumbotron">
        <div class="row col-md-8 col-md-offset-2">
            <div class="col-md-2">
                <img src="img/logo.jpg" id="logo">
            </div>
            <div class="col-md-10" id="jumbo-text">
                <h1>Glenfield Doctors on Chartwell</h1>
                <p>Welcome to Glenfield Doctors on Chartwell. We are a family-friendly practice which has been operating in Glenfield, on Auckland's North Shore since 2001.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-lg-offset-2">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default" style="margin-top:50px">
                    <div class="text-center header">About Us</div>
                    <div class="panel-body text-center">
                        <p>We have a purpose designed and remodelled premises with features to help make a visit to "the doctor" somewhat more relaxing and 
                    less intimidating than in many busy medical clinics. We offer:
                        <ul class="bullet-list-centre text-left">
                            <li>Onsite parking</li>
                            <li>A range of <a href="services.php">services</a></li>
                            <li>Online appointment booking through our Patient Portal</li>
                            <li>Experienced and diverse <a href="staff.php">staff</a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default" style="margin-top:50px">
                    <div class="text-center header">Patient Portal</div>
                    <div class="panel-body text-center">
                        <p>Your own personal 'Patient Portal' is now available. You can sign up easily to make:</p>
                        <ul class="bullet-list-centre text-left">
                            <li>Online appointments</li>
                            <li>Laboratory reports</li>
                            <li>Most x-ray and scan reports</li>
                            <li>Prescription lists and repeat orders</li>
                        </ul>
                        <p>Check in and register your details <a href="https://www.connectmed.co.nz/practice/glenfield-doctors-on-chartwell">here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
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