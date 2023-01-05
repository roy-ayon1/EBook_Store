<?php
if (isset($_POST["submit"])) {
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];

    $conn = mysqli_connect('localhost','root','','ebookstore');
    $sql = "select * from login_info where email = '$email' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1) {
        if($row['user_type']=='coustomer'){
        session_start();
        $_SESSION["email"] = $email;
        echo '<script>alert("succesfully login")</script>';
        header("refresh: 0; url=userhome.php");
        exit();
        }
        else{
        session_start();
        $_SESSION["email"] = $email;
        echo '<script>alert("succesfully login")</script>';
        header("refresh: 0; url=adminhome.php");
        exit();
        }
    }
    else{
        echo '<script>alert("Invalid username or password.")</script>';
        header("refresh: 0; url=login.php");
        exit();
    }
}
if (!isset($_POST["submit"])) {
    echo '<script>alert("User not found")</script>';
    header("refresh: 0; url=login.php");
}
?>