<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
            text-decoration: none;
            margin-left: 2%;
            margin-right: 1%;
        }
        .container{
            margin: 10% 30%;
            font-size: 30px;
            line-height: 2.5rem;
        }
        table{
            width:100%;
            margin-top: 10%;
        }
        .content-1{
            height: 25px;
            width: 80%;
        }
        select{
            height: 30px;
            width: 83%;
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
            <form action="registrationprocess.php" method="post">
                <table>
                    <tr>
                        <td><label for="name">User Name :</label></td>
                        <td><input type="text" name="user_name" class="content-1"><br></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="text" name="user_email" class="content-1"><br></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone :</label></td>
                        <td><input type="tel" name="user_phone" class="content-1"><br></td>
                    </tr>
                    <tr>
                        <td><label for="user_password">Password:</label></td>
                        <td><input type="password" name="user_password" class="content-1" ><br></td>
                    </tr>
                    <tr>
                        <td><label for="user_com_password">Comfirm Password :</label></td>
                        <td><input type="password" name="user_com_password" class="content-1"><br></td>
                    </tr>
                    <tr>
                        <td><label for="question">Question :</label></td>
                        <td>
                        <select name="user_question" id="question-select">
                            <option value="">--Please choose an option--</option>
                            <option value="What is Favourit Dog name?">What is Favourit Dog name?</option>
                            <option value="Why month you are born?">Why month you are born?</option>
                            <option value="Why month you are born?">How old are you?</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="answer">Answer :</label></td>
                        <td><input type="text" name="user_answer" class="content-1"><br></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Registration" class="myButton">
            </form>
        </section>

    </div>
</body>
</html>