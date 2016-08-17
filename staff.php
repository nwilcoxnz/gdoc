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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Exrta Styling -->
    <link href="css/custom_style.css" rel="stylesheet">

    <style type="text/css">
        #navbar{
            background-color: #082050;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php';?>

    <div class="col-lg-8 col-lg-offset-2">
        <h1>Staff</h1>
        <h4>We have friendly, diverse staff with a range of skills and specialties.</h4>
        <br>
        <h1>Doctors</h1>
        <hr>
        <!-- Jon Wilcox -->
        <div class="row">
            <div class="col-md-4">
                <img src="img/jon.jpg" class="staff-image">
            </div>
            <div class="col-md-6">
                <h3>Dr. Jon Wilcox</h3>
                <p> <i class="fa fa-medkit" aria-hidden="true"></i> General Practice</p>
                <p> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBChB (Otago), DipObst, FRNZCGP</p>
                <p> <i class="fa fa-globe" aria-hidden="true"></i> English</p>
            </div>
        </div>

        <hr>

        <!-- Saira Goroo -->
        <div class="row">
            <div class="col-md-4">
                <img src="img/saira.png" class="staff-image">
            </div>
            <div class="col-md-6">
                <h3>Dr. Saira Goroo</h3>
                <p> <i class="fa fa-medkit" aria-hidden="true"></i> General Practice</p>
                <p> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS and MRNZCGP</p>
                <p> <i class="fa fa-globe" aria-hidden="true"></i> English, Hindi, Kashmiri, Urdu</p>
            </div>
        </div>

        <hr>

        <!-- Nam Kim -->
        <div class="row">
            <div class="col-md-4">
                <img src="img/nam.png" class="staff-image">
            </div>
            <div class="col-md-6">
                <h3>Dr. Nam Kim</h3>
                <p> <i class="fa fa-medkit" aria-hidden="true"></i> General Practice</p>
                <p> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBChB (Otago), MRNZCGP</p>
                <p> <i class="fa fa-globe" aria-hidden="true"></i> English, Korean</p>
            </div>
        </div>
        <br>
    </div>

    <?php include 'footer.php';?>
    
</body>
</html>