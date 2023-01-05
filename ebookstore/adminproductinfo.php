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
        .product{
            background-color: #003638;
        }
        .product:hover{
            background-color: #001E6C;
        }
        .user_info:hover, .login:hover, .dashboard:hover, .order:hover, .payment:hover, .helpdesk:hover{
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
                        <td><label for="search">Product Name:</label></td>
                        <td><input type="text" name="name"><br></td>
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
                        <td><label for="search">Product Name:</label></td>
                        <td><input type="search" name="name"><br></td>
                    </tr>
                    </table>
                     <input type="submit" name="search" value="Search">
                    </form>
                </fieldset>
            </div>
            <div class="add">
                <fieldset>
                    <legend>Add</legend>
                    <form action="adminproductinfo.php" method="post" enctype="multipart/form-data">

                    <table>
                        <tr>
                            <td><label for="file">Choose Image:</label></td>
                            <td><input type="file" name="product_image"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Name :</label></td>
                            <td><input type="text" name="product_name"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Author :</label></td>
                            <td><input type="text" name="author"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Category :</label></td>
                            <td><input type="text" name="category"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Availability :</label></td>
                            <td><input type="text" name="availability"><br></td>
                        </tr>
                        <tr>
                            <td><label for="number">Price :</label></td>
                            <td><input type="number" name="price"><br></td>
                        </tr>
                    </table>
                    <input type="submit" name="product-ADD" value="Product-ADD">
                    </form>
                </fieldset>
            </div>
            <div class="Update">
                <fieldset>
                    <legend>update</legend>
                    <form action="adminproductinfo.php" method="post" enctype="multipart/form-data">

                    <table>
                         <tr>
                            <td><label for="text">Name :</label></td>
                            <td><input type="text" name="product_name"><br></td>
                        </tr>
                        <tr>
                            <td><label for="file">Choose Image:</label></td>
                            <td><input type="file" name="product_image"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Author :</label></td>
                            <td><input type="text" name="author"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Category :</label></td>
                            <td><input type="text" name="category"><br></td>
                        </tr>
                        <tr>
                            <td><label for="text">Availability :</label></td>
                            <td><input type="text" name="availability"><br></td>
                        </tr>
                        <tr>
                            <td><label for="number">Price :</label></td>
                            <td><input type="number" name="price"><br></td>
                        </tr>
                    </table>
                    <input type="submit" name="product-update" value="Product-Update">
                    </form>
                </fieldset>
            </div>
        </div>
        <hr>
        <div class="bottom">
        <form action=" " method="get">
         <table border="1" class="product_table">
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Author Name</th>
              <th>Category</th>
              <th>Availability</th>
              <th>Price</th>
          </tr>
      <?php
      if(isset($_POST["search"])) {
        $name = $_POST["name"];
        $conn = mysqli_connect('localhost','root','','ebookstore');
        $sql = "SELECT * from product WHERE product_name='$name'";
        $result = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_array($result))
        {
          ?>
          
          <tr>
            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['product_image']).'" alts="image" width="100px" height="90px">';?> </td>
            <td><?php echo $row['product_name'];?> </td>
            <td><?php echo $row['author'];?> </td>
            <td><?php echo $row['category'];?> </td>
            <td><?php echo $row['availability'];?> </td>
            <td><?php echo $row['price'];  ?> </td>
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

if(isset($_POST["product-ADD"])) {
    $name = $_POST["product_name"];
    $author =$_POST["author"];
    $category=$_POST["category"];
    $availability=$_POST["availability"];
    $price=$_POST["price"];
    $product_image=addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));

    if($name==""|| $author=="" || $category==""|| $availability==""|| $price==""|| $product_image==""){
        echo '<script>alert("Fill all field first")</script>';
    }
    else{
        $sql = "insert into product(product_name,author, category, availability, price, product_image) values('$name', '$author', '$category', '$availability', '$price', '$product_image')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("succesfully ADD")</script>';
        }
        else{
            echo '<script>alert("File not ADD")</script>';
        }
    }
    
}
?>

<!--Update-->
<?php
$conn = mysqli_connect('localhost','root','','ebookstore');

if(isset($_POST["product-update"])) {
    $name = $_POST["product_name"];
    $author =$_POST["author"];
    $category=$_POST["category"];
    $availability=$_POST["availability"];
    $price=$_POST["price"];
    $product_image=addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));

    if($name==""|| $author=="" || $category==""|| $availability==""|| $price==""|| $product_image==""){
        echo '<script>alert("Fill all field first")</script>';
    }
    else{
        $sql = "UPDATE product SET author = '$author', category = '$category', availability = '$availability', price ='$price', product_image='$product_image' WHERE product_name = '$name';";
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
    $name = $_POST["name"];

    if($name==""){
        echo '<script>alert("Fill all field first")</script>';
    }
    else{
        $sql = "DELETE FROM product WHERE product_name = '$name';";
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

