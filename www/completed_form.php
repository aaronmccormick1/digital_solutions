<?php
require "db_conn.php";
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT * FROM `mdl_test` where id = " . $_GET["id"];
    $get_completed_form = mysqli_query($conn, $sql);
    if ($conn === false) {
        echo mysqli_connect_error();
        exit;
    } else {
        $form = mysqli_fetch_assoc($get_completed_form);
    }
} else {
    echo "Form does not exist";
}
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
    <div style="border: 2px solid white; border-radius: 10px; background-color: #0077b6; margin: 2.5% 8.5% 2.5% 8.5%">
        <div style="text-align: center; padding-top: 30px; color: white">
            <img src="img/logo.jpg" alt="logo" width="60" height="54" class="d-inline-block" style="margin-right: 10px;">
            <div class="d-inline-block" style="color: #fff; font-family: 'Poppins', sans-serif"></div></a>
            <h1>JJ Keller Autos</h1>
            <h2>Driver's Inspection Report</h2>
            <h3 style="font-size: 12px; text-decoration: underline">Report ID: <?php echo $form["id"]; ?></h3>
        </div>

        <div style="padding: 5px;">
            <div class="form-group row">
                <label for="truckNo" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif">Truck or Tractor Number: </label>
                <div class="col-sm-3">
                    <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff" readonly class="form-control-plaintext" id="truckNo" placeholder="<?php echo $form["truckNo"]; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="milage" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif">Milage: </label>
                <div class="col-sm-3">
                    <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff" readonly class="form-control-plaintext" id="milage" placeholder="<?php echo $form["milage"]; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="trailerNo" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif">Trailer Number: </label>
                <div class="col-sm-3">
                    <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff" readonly class="form-control-plaintext" id="trailerNo" placeholder="<?php echo $form["trailerNo"]; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="dailyNo" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif">Daily Number: </label>
                <div class="col-sm-3">
                    <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff" readonly class="form-control-plaintext" id="dailyNo" placeholder="<?php echo $form["dailyNo"]; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif">Location: </label>
                <div class="col-sm-3">
                    <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff" readonly class="form-control-plaintext" id="location" placeholder="<?php echo $form["location"]; ?>">
                </div>
            </div>
        </div>

        <h2 style="text-align: center; padding-top: 30px; color: white">General Condition</h2>
        <div class="form-group row">
            <label for="general_condition" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">General Condition: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="general_condition" placeholder="<?php echo $form["general_condition"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="general_condition_other" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">General Condition Other: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="general_condition_other" placeholder="<?php echo $form["general_condition_other"]; ?>">
            </div>
        </div>

        <h2 style="text-align: center; padding-top: 30px; color: white">Engine Compartment</h2>
        <div class="form-group row">
            <label for="engine_compartment" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">Engine Compartment: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="engine_compartment" placeholder="<?php echo $form["engine_compartment"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="engine_compartment-other" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">Engine Compartment Other: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="engine_compartment_other" placeholder="<?php echo $form["engine_compartment_other"]; ?>">
            </div>
        </div>

        <h2 style="text-align: center; padding-top: 30px; color: white">In Cab</h2>
        <div class="form-group row">
            <label for="in_cab" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">In Cab: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="in_cab" placeholder="<?php echo $form["in_cab"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="in_cab_other" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">In Cab Other: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="in_cab_other" placeholder="<?php echo $form["in_cab_other"]; ?>">
            </div>
        </div>

        <h2 style="text-align: center; padding-top: 30px; color: white">Exterior</h2>
        <div class="form-group row">
            <label for="exterior" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">Exterior: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="exterior" placeholder="<?php echo $form["exterior"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="exterior_other" class="col-sm-2 col-form-label" style="margin-left: 10px; color: #fff; font-family: 'Poppins', sans-serif;">Exterior Other: </label>
            <div class="col-sm-6">
                <input type="text" style="padding-left: 10px; font-family: 'Poppins', sans-serif; color: #fff;" readonly class="form-control-plaintext" id="exterior_other" placeholder="<?php echo $form["exterior_other"]; ?>">
            </div>
        </div>







    </div>
</body>

</html>


<!--<div name="recent_posts;">
        <h3 style="margin-left: 40px;">Latest Posts:</h3>
        <ol>
            <?php if ($form === null) : ?>
                <p>No Posts Found, maybe you could be the first!</p>
            <?php else : ?>
            <li style="list-style-type: none; border: 1px black solid; width: 50%; margin-bottom: 10px; border-radius: 10px;">
                <h4 style="padding-left: 20px; text-decoration: blue underline"><?php echo $form["general_condition"]; ?></h4>
            </li>
            <?php endif; ?>

        </ol>
    </div> -->