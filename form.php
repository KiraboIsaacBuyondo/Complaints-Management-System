<?php
  include 'dashboards/sessionConnection.php';
?>

<!DOCTYPE html>
<html>
        <head>
            <title>IIP  |  Complaint Receipt</title>

        </head>
        <body>

<?php
    if(isset($_POST["submit"])){
        $conn = mysqli_connect('localhost','root','','iip');
        if (!$conn) {
            die("error".mysqli_connect_error($conn));
        }

        $name =  $_POST['name'];
        $regNo =  $_POST['regNo'];
        $course = $_POST['course'];
        $complaint = $_POST['complaint'];
    

        //queries required
        $query2 = "INSERT INTO complaint(stdName, regNo, courseName, webmail, complaint, complaintStatus)
         VALUES ('$name', '$regNo', '$course', '$webmail', '$complaint', 'submitted')";
        
        $result = mysqli_query($conn, $query2);

         if($result){
             $caseNew = mysqli_insert_id($conn);
              mysqli_query($conn, "INSERT INTO ar(caseTracker) VALUES ($caseNew)");
            echo("<br> <center> <h2> The complaint has been recorded successfully. Your case tracking number is: ".$caseNew. "
                 </h2> </center>");
                 echo("<span style='color:#b26896'>click Here if you want to log out</span><a style='text-decoration:none;' href='loginPage.php'>Logout</a>");
                 echo("<P style='color:#442544'> Click here to go back to the Dashboard <a style='text-decoration:none;' href= '\IIP App Work\dashboards\studentDashboard.php'>Go Back</p>");
          }
      }
?>
</body>
</html>