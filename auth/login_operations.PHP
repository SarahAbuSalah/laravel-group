<?php

session_start();

require "../connection_db.php";

    $emailError = "";

// SIGNUP // 

if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn , $check);

    if(mysqli_num_rows($result) > 0){
        $emailError = "This email already exists!";
    } else {

        $sql = "INSERT INTO users (name, email, passwords) VALUES ('$name', '$email', '$password')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['user_id'] = mysqli_insert_id($conn);
            $_SESSION['name'] = $name;
            header("location: ../form.php");
            exit();
        } else {
            echo mysqli_error($conn);
        }
    }
}


// Login //

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' AND passwords = '$password'";
        $result = mysqli_query($conn , $sql);
   
        if (mysqli_num_rows($result) > 0) {

            $user = mysqli_fetch_assoc($result);

    
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header("location: ../form.php");
            exit;

        } else {
        $emailError = "Wrong email or password";
    }
}


// LOGOUT // 

if (isset($_POST['logout'])) {

    session_unset();
    session_destroy();

    header("location: login.php");
    exit();
}

?>