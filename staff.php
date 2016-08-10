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
        .staff-image{
            max-width: 350px;
        }
        @media (max-width: 1625px) {
            .staff-image{
                max-width: 300px;
            }
        }
        @media (max-width: 1435px) {
            .staff-image{
                max-width: 250px;
            }
        }
        @media (max-width: 1200px) {
            .staff-image{
                max-width: 320px;
            }
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
                <h4>Qualifications:</h4>
                <br>
                <h4>Areas of interest:</h4>
                <br>
                <h4>Languages spoken:</h4>
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
                <h4>Qualifications:</h4>
                <br>
                <h4>Areas of interest:</h4>
                <br>
                <h4>Languages spoken:</h4>
            </div>
        </div>

        <hr>

        <!-- Saira Goroo -->
        <div class="row">
            <div class="col-md-4">
                <img src="img/nam.png" class="staff-image">
            </div>
            <div class="col-md-6">
                <h3>Dr. Nam Kim</h3>
                <h4>Qualifications:</h4>
                <br>
                <h4>Areas of interest:</h4>
                <br>
                <h4>Languages spoken:</h4>
            </div>
        </div>
        <hr>
        <br>

        <h1>Nurses</h1>
    </div>
    

    <?php include 'footer.php';?>
    
</body>
</html>