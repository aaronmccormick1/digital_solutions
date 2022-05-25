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
                        <a class="nav-link active" aria-current="page" href="dashboard.php" style="color: #fff;">Dashboard</a>
                    </li>
                    <?php if ($_SESSION['admin'] == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php" style="color: #fff;">Report</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php" style="color: #fff;">Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="text-align: center; margin-top: 55px; color: #fff; font-family: 'Poppins', sans-serif;">
        <h1 style="font-size: 50px">Welcome <?php echo $_SESSION['first_name'] ?></h1>
        <h2 style="font-size: 28px">Below are the available forms</h2>
    </div>
    <div class="dashboard_box" style="  margin-top: 130px;">
        <div class="row">
            <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px; background-color: #0D6EFD;">
                DRIVER'S INSPECTION REPORT
                <img src="img/report_icon.jpg" alt="" width="55" height="54" class="" style="border-radius: 10px; display: block; margin:auto; margin-top: 10px;">
                <button type="submit" onclick="location.href = '/form.php';" class="btn btn-primary btn-block" style="margin:auto; display:block; margin-top: 10px; font-size: 20px;">View</button>
            </div>
            <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px; background-color: #0D6EFD">
                ???
                <img src="img/report_icon.jpg" alt="" width="55" height="54" class="" style="border-radius: 10px; display: block; margin:auto; margin-top: 10px;">
                <button type="submit" class="btn btn-primary btn-block" style="margin:auto; display:block; margin-top: 10px; font-size: 20px;">View</button>
            </div>
            <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 10px; color: white; font-family: 'Poppins', sans-serif; text-align: center; padding-top: 15px; padding-bottom: 15px; background-color: #0D6EFD">
                ???
                <img src="img/report_icon.jpg" alt="" width="55" height="54" class="" style="border-radius: 10px; display: block; margin:auto; margin-top: 10px;">
                <button type="submit" class="btn btn-primary btn-block" style="margin:auto; display:block; margin-top: 10px; font-size: 20px;">View</button>
            </div>
        </div>
    </div>
</body>

</html>