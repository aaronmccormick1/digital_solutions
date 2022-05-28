<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

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
                            <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;">Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="dashboard_box" style="width: 380px; height: 480px; margin-top: 150px; margin-left: auto; margin-right:auto">
            <div class="row">
                <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    <img src="img/profile_icon.jpg" alt="" width="145" height="124" class="" style="border-radius: 10px; display: block; margin:auto; margin-top: 10px;">
                    <?php if ($_SESSION['admin'] == 1) { ?>
                        <h3 style="font-size: 18px; color: red; text-decoration: underline">Admin Account</h3>
                    <?php } ?>
                    <h3 style="font-size: 18px; margin-top: 40px"><b>Email:</b> <?php echo $_SESSION['email'] ?></h3>
                    <h3 style="font-size: 18px"><b>First Name:</b> <?php echo $_SESSION['first_name'] ?></h3>
                    <h3 style="font-size: 18px;"><b>Last Name: </b><?php echo $_SESSION['last_name'] ?></h3>
                    <button type="submit" onclick="location.href = '/logout.php';" class="btn btn-primary btn-block" style="margin:auto; display:block; margin-top: 30px; font-size: 20px;">Logout</button>
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