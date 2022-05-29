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
            <img src="img/logo-nav.jpg" alt="logo" width="60" height="54" class="d-inline-block" style="margin-right: 10px;">
            <div class="d-inline-block" style="color: #fff; font-family: 'Poppins', sans-serif">JJ Keller Autos</div></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="background-color: #fff; color:#fff"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style=" font-family: 'Poppins', sans-serif; text-align: center;">
                <div class="navbar-nav ms-auto">
                    <a href="login.php" class="nav-item nav-link" style="color: #fff;">Login</a>
                    <a href="signup.php" class="nav-item nav-link" style="color: #fff;">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="form-box" style="height: 650px !important; margin-top: 100px;">
            <div class="card-body">
                <img src="img/logo.jpg" alt="logo" class="logo" width="60" height="54">
                <h1 class="card-title text-center">SIGN UP</h1>
                <div class="card-text">

                    <form action="signup_check.php" method="post">

                        <?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error" style="text-align: center; background-color: #d17a7a; border-radius: 10px; color: #fff; padding-top: 1%; padding-bottom: 1%;"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php
                        if (isset($_GET['success'])) { ?>
                            <p class="success" style="text-align: center; background-color: #00cc66; border-radius: 10px; color: #fff; padding-top: 1%; padding-bottom: 1%;"><?php echo $_GET['success']; ?></p>
                        <?php } ?>

                        <!--First Name -->
                        <label for="exampleInputFirstname">Firstname</label>
                        <?php
                        if (isset($_GET['first_name'])) { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputFirstname" name="first_name" value="<?php echo $_GET['first_name']; ?>">
                        <?php } else { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputFirstname" name="first_name">
                        <?php } ?>

                        <!--Surname -->
                        <label for="exampleInputSecondname">Surname</label>
                        <?php
                        if (isset($_GET['last_name'])) { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputSecondname" name="last_name" value="<?php echo $_GET['last_name']; ?>">
                        <?php } else { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputSecondname" name="last_name">
                        <?php } ?>

                        <!--Email -->
                        <label for="exampleInputEmail">Email Address</label>
                        <?php
                        if (isset($_GET['email'])) { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail" name="email" value="<?php echo $_GET['email']; ?>">
                        <?php } else { ?>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail" name="email">
                        <?php } ?>





                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword2" name="confirm_password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>