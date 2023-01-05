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
            padding: 20% 20%;
            border: 1px solid black;
        }
        #side_menu_content{
            padding: 10% 22%;
            border: 1px solid black;
        }
        .order{
            background-color: #003638;
        }
        .order:hover{
            background-color: #001E6C;
        }
        .user_info:hover, .login:hover, .dashboard:hover, .product:hover, .payment:hover, .helpdesk:hover{
            background-color: #003638;
        }
        .top {
            border-radius: 8px;
            display: grid;
            grid-template-columns: 0.5fr 0.5fr 1fr 1fr;
            text-align: left;
            line-height: 2;
        }
        .product_table{
            width: 85%;
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
        <div class="top">
            <div class="delete">
                <fieldset>
                    <legend>Delete</legend>
                    <form action=" " method="post">
                    <table>
                    <tr>
                        <td><label for="phone">Order Phone:</label></td>
                        <td><input type="tel" name="phone"><br></td>
                    </tr>
                    </table>
                     <input type="submit" name="delete" value="Delete">
                    </form>
                </fieldset>
            </div>
            <div class="search">
                <fieldset>
                    <legend>Search</legend>
                    <form action=" " method="post">
                    <table>
                    <tr>
                        <td><label for="phone">Order Phone:</label></td>
                        <td><input type="tel" name="phone"><br></td>
                    </tr>
                    </table>
                     <input type="submit" name="search" value="Search">
                    </form>
                </fieldset>
            </div>
            <div class="add">
                <fieldset>
                    <legend>Add</legend>
                    <form action="adminorderlist.php" method="post" enctype="multipart/form-data">

                    <table>
                        <tr>
                            <td><label for="phone">Order Phone:</label></td>
                            <td><input type="tel" name="phone"><br></td>
                        </tr>
                        <tr>
                            <td><label for="item">Order Item :</label></td>
                            <td><input type="text" name="order_item"><br></td>
                        </tr>
                        <tr>
                            <td><label for="date">Date :</label></td>
                            <td><input type="date" name="date"><br></td>
                        </tr>
                        <tr>
                            <td><label for="billing_address">Billing address :</label></td>
                            <td><input type="text" name="billing_address"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Shiping address :</label></td>
                            <td><input type="text" name="shiping_address"><br></td>
                        </tr>
                    </table>
                    <input type="submit" name="order-ADD" value="order-ADD">
                    </form>
                </fieldset>
            </div>
            <div class="Update">
                <fieldset>
                    <legend>update</legend>
                    <form action="adminorderlist.php" method="post" enctype="multipart/form-data">

                    <table>
                        <tr>
                            <td><label for="phone">Order Phone:</label></td>
                            <td><input type="tel" name="phone"><br></td>
                        </tr>
                        <tr>
                            <td><label for="item">Order Item :</label></td>
                            <td><input type="text" name="order_item"><br></td>
                        </tr>
                        <tr>
                            <td><label for="date">Date :</label></td>
                            <td><input type="date" name="date"><br></td>
                        </tr>
                        <tr>
                            <td><label for="billing_address">Billing address :</label></td>
                            <td><input type="text" name="billing_address"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Shiping address :</label></td>
                            <td><input type="text" name="shiping address"><br></td>
                        </tr>
                    </table>
                    <input type="submit" name="order-update" value="order-Update">
                    </form>
                </fieldset>
            </div>
        </div>
        <hr>
        <div class="bottom">
        <form action=" " method="get">
         <table border="1" class="product_table">
          <tr>
              <th>order id</th>
              <th>order item</th>
              <th>order date</th>
              <th>phone</th>
              <th>billing address</th>
              <th>shiping address</th>
          </tr>
      <?php
      if(isset($_POST["search"])) {
        $phone = $_POST["phone"];
        $conn = mysqli_connect('localhost','root','','ebookstore');
        $sql = "SELECT * from order_info WHERE user_phone='$phone'";
        $result = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_array($result))
        {
          ?>
          
          <tr>
            <td><?php echo $row['order_id'];?> </td>
            <td><?php echo $row['order_item'];?> </td>
            <td><?php echo $row['order_date'];?> </td>
            <td><?php echo $row['user_phone'];?> </td>
            <td><?php echo $row['billingaddress'];  ?> </td>
            <td><?php echo $row['shipingaddress'];  ?> </td>
          </tr>
          <?php
        
        }
      }
    ?>
    </table>
    </form>
        </div>
    </div>
</body>
</html>

<!--Add-->
<?php
$conn = mysqli_connect('localhost','root','','ebookstore');

if(isset($_POST["order-ADD"])) {
    $phone = $_POST["phone"];
    $item =$_POST["order_item"];
    $date =$_POST["date"];
    $biaddress =$_POST["billing_address"];
    $shipaddress =$_POST["shiping_address"];

    $sql = "insert into order_info (order_item, order_date, user_phone, billingaddrress, shipingaddress) values('$item', '$date', '$phone', '$biaddress', '$shipaddress')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("succesfully ADD")</script>';
        }
        else{
            echo '<script>alert("File not ADD")</script>';
        }
    
}
?>

<!--Update-->
<?php
$conn = mysqli_connect('localhost','root','','ebookstore');

if(isset($_POST["order-update"])) {
    $phone = $_POST["phone"];
    $item =$_POST["order_item"];
    $date =$_POST["date"];
    $biaddress =$_POST["billing_address"];
    $shipaddress =$_POST["shiping_address"];

    if($phone==""|| $item=="" || $date==""|| $biaddress==""|| $shipaddress==""){
        echo '<script>alert("Fill all field first")</script>';
    }
    else{
        $sql = "UPDATE order_info SET order_item = '$item', order_date = '$date', billingaddress = '$biaddress', shipingaddress ='$shipaddress';";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("succesfully update")</script>';
        }
        else{
            echo '<script>alert("File not update")</script>';
        }
    }
    
}
?>



<!--delete-->
<?php
$conn = mysqli_connect('localhost','root','','ebookstore');

if(isset($_POST["delete"])) {
    $phone = $_POST["phone"];

    if($phone==""){
        echo '<script>alert("Fill all field first")</script>';
    }
    else{
        $sql = "DELETE FROM order_info WHERE user_phone = '$phone';";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("succesfully delete")</script>';
        }
        else{
            echo '<script>alert("File not delete")</script>';
        }
    }
    
}
?>

