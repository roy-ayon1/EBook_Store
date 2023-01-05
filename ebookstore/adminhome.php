<?php
$token="";
$token2="";
$token3="";
$token4="";
$token5="";
$token6="";
$token7="";
$token8="";
$token9="";
$token10="";
$token11="";
$token12="";
$token13="";
$token14="";
$token15="";
$token16="";
session_start();
if(isset($_SESSION["email"])==null){
    header("refresh: 0; url=login.php");
    echo '<script>alert("login first")</script>';
}
else{
  $token ="admindashboard.php";
  $token2 = "Dashboard";
  $token5="adminlogininfo.php";
  $token6="login user";
  $token7="adminproductinfo.php";
  $token8="product";
  $token9="adminorderlist.php";
  $token10="Order List";
  $token11="adminpaymentlist.php";
  $token12="Payment List";
  $token13="adminhelpdesk.php";
  $token14="Help Desk";
  $token15="logout.php";
  $token16="logout";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
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
        .side_menubar{
            background-color: #001E6C;
            color: #F5E8C7;
            font-size: 20px;
            height: 100%;
            width: 15%;
            float: left;
        }
        a{
            color: #F5E8C7;
            text-decoration: none;
        }
        .user_info{
            background-color: #003638;
            padding: 20% 20%;
            border: 1px solid black;
        }
        #side_menu_content{
            padding: 10% 22%;
            border: 1px solid black;
        }
        .user_info:hover{
            background-color: #001E6C;
        }
        .dashboard:hover, .login:hover, .product:hover, .order:hover, .payment:hover, .helpdesk:hover{
            background-color: #003638;
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
    </style>
</head>
<body>
    <div class="navbar">
         <nav>
             <a class="navbarA">E-Book Store</a>
        </nav>
    </div>
    <div class="side_menubar">
        <nav class="side_nav">
        <div class="user_info">
            <img src="user.png" alt="user_icon" width="100px" height="90px"><br>
            <?php
            $email = $_SESSION["email"];
            $conn = mysqli_connect('localhost','root','','ebookstore');
            $sql = "SELECT * from login_info WHERE email='$email'";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result))
            {

            echo "Name : ".$row['user_name']."<br>";
            echo "User : ".$row['user_type']."<br>";
            }

            ?>

            </div>
            <div class="login" id="side_menu_content">
            <a href=<?php echo $token5; ?>><?php echo $token6; ?></a>
            </div>
            <div class="product" id="side_menu_content">
            <a href=<?php echo $token7; ?>><?php echo $token8; ?></a>
            </div>
            <div class="order" id="side_menu_content">
            <a href=<?php echo $token9; ?>><?php echo $token10; ?></a>
            </div>
            <div class="payment" id="side_menu_content">
            <a href=<?php echo $token11; ?>><?php echo $token12; ?></a>
            </div>
            <div class="dashboard" id="side_menu_content">
            <a href=<?php echo $token15; ?>><?php echo $token16; ?></a>
            </div>

        </nav>

    </div>
    <div class="container">
      <<?php
      $conn = mysqli_connect('localhost','root','','ebookstore');
      $sql = "SELECT * from ctms";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_array($result))
      {

      echo "id : ".$row['admin_id']."<br>";
      echo "name : ".$row['admin_name']."<br>";
      echo "Phone : ".$row['admin_phone']."<br>";
      echo "address : ".$row['admin_address']."<br>";
      }
       ?>
    </div>


</body>
</html>
