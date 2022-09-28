<html>
    <head>
        <title> IIP  |  Forgot Password</title>
        
        <link rel="stylesheet" href="design.css">
    </head>

    <header> <table>

        <tr > <td> <a href="https://www.mak.ac.ug/"> <img id="img1" src= "\IIP App Work\images\mukimage.jfif" height="90px"> </a> </td> <td width = 1200px> <h1 id="main-header"> Reset Password </h1> </td> </tr> </table>
    </header>
<body>
        <form class="forms" action="forgotPassword.php" method="post">
            <b>
            <div class="container">

	            <label>Input webmail:</label> <br>
	            <input type="text" class="login" placeholder="enter your email" name="email" autofocus > <br> <br>

	            <label>Input New password:</label> <br>
	            <input type="password" class="login" placeholder="enter a new password" name="password1"> <br> <br> <br>

	            <label>Confirm password:</label> <br>
	            <input type="password" class="login" placeholder="re-enter your password" name="password2"> <br> <br> <br>
            <center>
                <input type="submit" class="btn" value="Submit" name="submit"> <input type="reset" class="btn" value="Clear"> <br> <br> 
            </center>  

             <i>Return to login? <a href="loginPage.php">Login</a></i>
            </div>
            </b>
        </form>
            
        <?php
            
            if(isset($_POST['submit'])){
            $conn = mysqli_connect('localhost','root','','iip');
            $webmail =mysqli_real_escape_string($conn, $_POST['email']);
            $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
            $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
            $queryOld = "SELECT webmail FROM userinfo WHERE webmail = '$webmail' LIMIT 1";

            $result = mysqli_query($conn, $queryOld);
            $userWebmail = mysqli_fetch_assoc($result);


            if($userWebmail["webmail"] === "$webmail" AND "$password1" === "$password2"){
              $queryNew = "UPDATE userinfo SET Pass = '$password1' WHERE webmail = '$webmail'";
              mysqli_query($conn,$queryNew);
            
              header('location:loginPage.php');
            
            }
            else{
                echo(" Enter matching passwords");
                echo($result);    
            }
            }
            
          ?> 


        <script src="formjava.js"></script>
</body>

</html>