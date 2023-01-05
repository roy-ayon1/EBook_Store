<?php
if (isset($_POST["submit"])){
    if($_POST["user_password"]==$_POST["user_com_password"]){
        $email = filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $name = $_POST["user_name"];
            $password = $_POST["user_password"];
            $phone = $_POST["user_phone"];
            $question = $_POST["user_question"];
            $answer = $_POST["user_answer"];
            $conn = mysqli_connect('localhost','root','','ebookstore');
            $sql = "insert into login_info(email, phone, password, question, answer, user_type, user_name) values('$email', '$phone', '$password', '$question', '$answer', 'coustomer', '$name')";
            if (mysqli_query($conn, $sql)){
                session_start();
                $_SESSION["email"] = $_POST["user_email"];
                echo '<script>alert("succesfully login")</script>';
                header("refresh: 0; url=userhome.php");
                exit();
            }
        }
        else {
            echo '<script>alert("email formate not correct")</script>';
            header("refresh: 0; url= registration.php");
    
        }
    }
    else {
        echo '<script>alert("Please make sure both password fields are same")</script>';
        header("refresh: 0; url=registration.php");
    }
}
else {
    if(session_status() == PHP_SESSION_NONE){
        header("refresh: 0; url=login.php");
    }
}
?>