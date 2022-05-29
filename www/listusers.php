<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    require('db_conn.php');
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM mdl_user WHERE id != $id";
    $query = $conn->query($sql);
    $rows = mysqli_num_rows($query);
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

        <table class="table" style="width: 70%; margin-left: auto; margin-right: auto">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Access</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = $query->fetch_assoc()) {

                    ?>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <?php if ($row['admin'] == 1) { ?> <td style="color: red"><b>Admin</b></td>
                        <?php } else { ?> <td style="color: green"><b>User</b></td> <?php } ?>
                        <td><a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-success" style="margin: 0px; margin-bottom: 10px; margin-left: 20px">Edit</a></td>
                        <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger" style="margin: 0px; margin-bottom: 10px; margin-left: 20px;">Delete</a></td>
                </tr>
            </tbody>
        <?php
                    }
        ?>
        </table>
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
    exit();
} ?>