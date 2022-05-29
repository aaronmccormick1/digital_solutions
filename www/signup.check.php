<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);
    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);

    $user_data = 'last_name='. $last_name. '&first_name='. $first_name. '&email='. $email;


    if (empty($email)) {
        header("Location: signup.php?error=Email is required&$user_data");
        exit();
    } else if (empty($password)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($confirm_password)) {
        header("Location: signup.php?error=Confirm Password is required&$user_data");
        exit();
    } else if (empty($first_name)) {
        header("Location: signup.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($last_name)) {
        header("Location: signup.php?error=Last Name is required&$user_data");
        exit();
    } else if ($password != $confirm_password) {
        header("Location: signup.php?error=Passwords do not match&$user_data");
        exit();
    } else {
        $pass = md5($password); //Hashing the password so it cannot be seen in the database

        $sql = "SELECT * FROM mdl_user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        
        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=This email is already registered&$user_data");
            exit();
        }else {
            $sql2 = "INSERT INTO mdl_user(email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$pass')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2){
                header("Location: signup.php?success=Account Created&$user_data");
                exit();
            }else{
                header("Location: signup.php?error=Unknown Error&$user_data");
                exit();
            }
        }
    } 
} else {
    header("Location: signup.php?error");
    exit();
}
?>