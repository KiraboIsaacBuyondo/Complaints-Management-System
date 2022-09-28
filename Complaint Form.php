<?php
  include 'dashboards/sessionConnection.php';
?>

<!DOCTYPE html>
<html>
        <head>
            <title>Complaint Form</title>
    
            <link rel="stylesheet" href="design.css">
           

        </head>

         <header> <table>

            <tr > <td> <a href="https://www.mak.ac.ug/"> <img id="img1" src= "\IIP App Work\images\mukimage.jfif" height="90px"> </a> </td> <td width = 1200px> <h1 id="main-header"> Student Complaint </h1> </td> </tr> </table>
        </header>
    <body>
<?php
  $detailsRetrieve = mysqli_query($conn, "SELECT Username,webmail FROM userinfo WHERE webmail = '$webmail' AND Pass = '$password'");
   while($details = mysqli_fetch_assoc($detailsRetrieve)){

?>
  
            <form class="forms" action="form.php" method="POST">
                <div class='container'>
               <b> <label> Name: <?php echo $details['Username'];?> </label>   
                <input type="hidden" class='textbox' id="Name" name="name" value="<?php echo $details['Username'];?>"> <br> <br>
                
                <label> Registration Number</label>   
                <input type="textbox" class='textbox' id="RegNo" placeholder="Input Reg Number" size="20" name="regNo" required> <br> <br>
                
                <label> Complaint filed on?</label> <br>
                
                <input type="radio" class="course" name="course" value="SAD"> <label>SAD</label> <br>
                <input type="radio" class="course" name="course" value="IIP"> <label>IIP</label> <br>
                <input type="radio" class="course" name="course" value="DIM"> <label>DIM</label> <br>
                <input type="radio" class="course" name="course" value="SDP"> <label>SDP</label> <br>
                <input type="radio" class="course" name="course" value="Numerical Analysis"> <label>Numerical Analysis</label> <br> <br>

                <label> Student Webmail:	<?php echo $details['webmail'];}?> </label>   
                <input type="hidden" class='textbox' id="Webmail" name="webmail" value="<?php echo $details['webmail'];?>"> <br> <br>
                
                <label>Briefly describe your Complaint </label> <br>   
                <textarea class='textbox' id="complaint" cols="60px" rows="10px" name="complaint" >

                </textarea>  <br> <br> <br>

                <i> Kindly Crosscheck and Verify the input information before clicking Submit </i> <br> <br> 

                <center>
                <input type="submit" class="btn" value="Submit Form" name="submit"> <input type="reset" class="btn" value="Clear Form"> 
                </center>  
                
            </b>
                </div>
            </form>
           
            <script src="formjava.js"></script>
    
    </body>    

</html>