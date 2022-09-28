<?php
        session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> IIP | Login</title>
        
        <link rel="stylesheet" href="design.css">
    </head>

    <header> <table>

        <tr > <td> <a href="https://www.mak.ac.ug/"> <img id="img1" src= "\IIP App Work\images\mukimage.jfif" height="90px"> </a> </td> <td width = 1200px> <h1 id="main-header"> User Login </h1> </td> </tr> </table>
    </header>
<body>
        <div class="loginPage">
        <form class="forms" action="loginPage.php" method="post">
            <b>
            <div class="container">
            <label>webmail:</label> <br> <br>
            <input type="text" class="login" placeholder="user-email" name="email" required autofocus> <br> <br> <br> 

            <label>Password:</label> <br> <br>
            <input type="password" class="login" placeholder="password" name="password" required autofocus> <br> <br>
            <i>Forgot Password? <a href="forgotPassword.php">Reset Pasword </a> </i>  <br> <br> <br>

            <center>
                <input type="submit" class="btn" value="Log in" name="submit"> <input type="reset" class="btn" value="Clear"> <br> <br> 
            </center>  
            <i>Are you a new user? <a href="signUp.php">Create Account </a> </i>
            </div>
            </div>
            </b>
        </form>

            
        <?php
            if(isset($_POST['submit'])){
                $conn = mysqli_connect('localhost','root','','iip');
                $webmail =mysqli_real_escape_string($conn, $_POST['email']); 
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $query1 = "SELECT *
                 FROM userinfo WHERE webmail = '$webmail' AND Pass = '$password' limit 1";

                 $userType = "SELECT userType
                  FROM userinfo WHERE webmail = '$webmail' AND Pass = '$password' limit 1";

                $result= mysqli_query($conn, $query1);
            
                $_SESSION['Password'] = $password;
                $_SESSION['webmail'] = $webmail;

                if(mysqli_num_rows($result)==1){
                $userType = mysqli_fetch_assoc($result);
                    if($userType["userType"]==='student'){
                 		header('location:dashboards\studentDashboard.php');
                    }

                 	elseif ($userType["userType"]==='lecturer') {
                 		header('location:dashboards\lecturerDashboard.php');
                 	}

                 	elseif ($userType["userType"]==='HoD') {
                 		header('location:dashboards\hoDDashboard.php');
                 	}

                  elseif ($userType["userType"]==='AR') {
                 		header('location:dashboards\ARDashboard.php');
                	}
                    
                 }

                else{
                	echo("Enter correct credentials");
                }
           
            }

        ?> 
</body>

</html>