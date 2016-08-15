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
    </style>

</head>

<body>

    <?php include 'navbar.php';?>

    <div class="col-lg-8 col-lg-offset-2">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php include 'hours_table.php';?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="text-center header">Contact</div>
                    <div class="panel-body text-center">
                        <p>Phone: (09) 44 123 52</p>
                        <p>Email: admin@glenfield-doctors.com</p>
                        <p>Fax: (09) 441 6176</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php include 'map_panel.php';?>
            </div>
        </div>

    </div>
    
    <?php include 'footer.php';?>
    
</body>
</html>