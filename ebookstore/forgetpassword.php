<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgetPassword</title>
    <style>
        body {
            background-color: #E7E0C9;
            color: #40514E;
            margin: 0;
        }
        .navbar{
            background-color: #2C2E43;
            border: 3px solid black;
            padding: 1%;
            width: 100%;
            text-decoration: none;
        }
        .navbarA {
            color: White;
            text-decoration: none;
            margin-left: 2%;
            margin-right: 1%;
        }
        .container{
            margin: 10% 30%;
            font-size: 30px;
        }
        table{
            width:100%;
            margin-top: 10%;
        }
        .content-1{
            height: 30px;
            width: 80%;
            line-height: 2.5rem;
        }
        .submit{
            padding-left: 40%;
            padding-right: 40%;
        }
        .myButton {
	    box-shadow: 0px 0px 0px 2px #9fb4f2;
	    background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	    background-color:#7892c2;
	    border-radius:10px;
	    border:1px solid #4e6096;
	    display:inline-block;
	    cursor:pointer;
	    color:#ffffff;
	    font-family:Arial;
	    font-size:20px;
	    padding:10px 37px;
        margin: 50px 33%;
	    text-decoration:none;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	    background-color:#476e9e;
    }
    .myButton:active {
        position:relative;
	    top:1px;
    }
    .option{
        text-decoration: none;
        opacity: .6;
    } 
    .option:hover{
        color: black;
    }
    #option-1{
        margin-left: 25%;
    }
    .forget_password{
        text-decoration: none;
        font-size: 15px;
    }
    </style>
</head>
<body>
    <div class="navbar">
         <nav>
             <a class="navbarA">E-Book Store</a>
             <a href="#contact" class="navbarA">Contact</a>
        </nav>
    </div>
    <div class="container">
        <section class="section_login">
            <a href="login.php" class="option" active id="option-1">Login</a>
            <a class="option">OR</a>
            <a href="registration.php" class="option">Registrtation</a>
            <form action=" " method="post">
                <table>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="text" name="user_email" class="content-1"><br></td>
                    </tr>
                </table>
                <input type="submit" name="send" value="Submit" class="myButton">
            </form>
        </section>
        <section>
        <fieldset>
            <legend>Checking</legend>
            <?php
            if(isset($_POST["send"])){
            $email = $_POST["user_email"];

            $conn = mysqli_connect('localhost','root','','ebookstore');
            $sql = "select * from login_info where email = '$email'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);


            echo '<form action=" " method="post">
            <table>
            <tr>
            <td><label for="email">Email :</label></td>
            <td>'.$row['question'].'</td>
            </tr>
            <tr>
            <td><label for="answer">Anwser :</label></td>
            <td><input type="text" name="answer"class="content-1"><br></td>
             </tr>
             <tr>
            <td><label for="phone">Phone :</label></td>
            <td><input type="tel" name="phone" class="content-1"><br></td>
             </tr>
            </table>
            <input type="submit" name="check" value="Submit" class="myButton">
            ';}?>

        <?php
        if(isset($_POST["check"])){
        $answer = $_POST["answer"];
        $phone = $_POST['phone'];

        $conn = mysqli_connect('localhost','root','','ebookstore');
        $sql = "select * from login_info where answer = '$answer' and phone = '$phone'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){
            echo '<form action=" " method="post">
        <table>
        <tr>
            <td><label for="email">Password :</label></td>
            <td>'.$row['password'].'</td>
        </tr>
        </table>
        ';
        exit();
        }
        else{
            echo '<script>alert("Your Information is wrong, Please try again!")</script>';
        }
        }
        
        ?>
        </fieldset>
        </section>
    </div>
</body>
</html>

