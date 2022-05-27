<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>

    <?php
    require('db_conn.php');
    $sql = "SELECT * FROM mdl_test";
    $query = $conn->query($sql);
    $rows = mysqli_num_rows($query);

    $neededRepairs = "SELECT * FROM mdl_test WHERE maintenance = 'Repairs Made'";
    $neededRepairsquery = $conn->query($neededRepairs);
    $repairs = mysqli_num_rows($neededRepairsquery);

    $date = date('m/d/Y', time());
    $reviewedToday = "SELECT * FROM mdl_test WHERE reporting_driver_date = $date";
    $reviewedTd = $conn->query($reviewedToday);
    $reviewd = mysqli_num_rows($reviewedTd);

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="diagonal-split-background">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4A00E0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: #fff; font-family: 'Poppins', sans-serif">
                    <img src="img/logo-nav.jpg" alt="" width="60" height="44" class="">
                    JJ Keller Autos
                </a>
                <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;">Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="dashboard_box" style="  margin-top: 80px;">
            <div class="row">
                <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    Forms Submitted: <?php echo $rows ?>
                </div>
                <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    Repairs Needed: <?php echo $repairs ?>
                </div>
                <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    Reviewed Today: <?php echo $reviewd ?>
                </div>
            </div>
        </div>
    </body>
    </html>
<?php
} else {
    header("Location: login.php");
    exit();
} ?>