 <html>
    <head>
        <title> Signup</title>
        
        <link rel="stylesheet" href="design.css">
    </head>

    <header> <table>

        <tr > <td> <a href="https://www.mak.ac.ug/"> <img id="img1" src= "\IIP App Work\images\mukimage.jfif" height="90px"> </a> </td> <td width = 1200px> <h1 id="main-header"> Signup </h1> </td> </tr> </table>
    </header>
<body>
        <form class="forms" action="signUp.php" method="post">
            <b>
            <div class="container">
            <label>Input username:</label> <br>
            <input type="text" class="login" placeholder="enter a username" name="name" > <br> <br>

            <label>Input webmail:</label> <br>
            <input type="text" class="login" placeholder="enter your email" name="email" > <br> <br>

            <label>Registering as:</label>
            
            <div class="radio">
            <input type="radio" name="userType" value="student" ><label>student</label> <br>
            <input type="radio" name="userType" value="lecturer"><label>lecturer</label> <br>
            <input type="radio" name="userType" value="HoD"><label>HoD</label> <br> 
            <input type="radio" name="userType" value="AR"><label>AR</label> <br> <br> <br>
            </div>

            <label>Input password:</label> <br>
            <input type="password" class="login" placeholder="enter a desired password" name="password1"> <br> <br> <br>

            <label>Confirm password:</label> <br>
            <input type="password" class="login" placeholder="re-enter your password" name="password2"> <br> <br> <br>

            <center>
                <input type="submit" class="btn" value="Submit" name="submit"> <input type="reset" class="btn" value="Clear"> <br> <br> 
            </center>  

             <i>Already have an account? <a href="loginPage.php">Login</a></i>
            </div>
            </b>
        </form>
            
        <?php
            
            if(isset($_POST['submit'])){
            $conn = mysqli_connect('localhost','root','','iip');
            $username =mysqli_real_escape_string($conn, $_POST['name']);
            $webmail =mysqli_real_escape_string($conn, $_POST['email']);
            $usertype =mysqli_real_escape_string($conn, $_POST['userType']);
            $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
            $password2 = mysqli_real_escape_string($conn, $_POST['password2']);


            if("$password1" === "$password2"){
              $query = "INSERT INTO userinfo (Username, webmail, userType, Pass) VALUES ('$username', '$webmail', '$usertype','$password1')";
              mysqli_query($conn,$query);

              if("usertype" == "student"){
                mysqli_query($conn, "INSERT INTO student(studentName,webmail) VALUES('$name', '$webmail')");
              }
              else if("usertype" == "lecturer"){
                mysqli_query($conn, "INSERT INTO lecturer(lecturerName,webmail) VALUES('$name', '$webmail')");
              }
              else if("usertype" == "HoD"){
                mysqli_query($conn, "INSERT INTO student(HoDName,webmail) VALUES('$name', '$webmail')");
              }
            
            header('location:loginPage.php');
            
            }
            else{
                echo(" Enter matching passwords");    
            }
            }
            
          ?> 

        <script src="formjava.js"></script>
</body>

</html> 