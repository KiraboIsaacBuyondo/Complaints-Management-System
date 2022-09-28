<!DOCTYPE html>
<html>
        <head>
            <title>Complaint Form</title>
    
            <link rel="stylesheet" href="design.css">

        </head>

         <header> <table>

            <tr > <td> <a href="https://www.mak.ac.ug/"> <img id="img1" src= "\IIP App Work\images\mukimage.jfif" height="90px"> </a> </td> <td width = 1200px> <h1 id="main-header"> Case Statistics </h1> </td> </tr> </table>
        </header>
    <body>

        <br> <br>
        <table>
    <?php
    $conn = mysqli_connect('localhost','root','','iip');
    if (!$conn) {
        die("error".mysqli_connect_error($conn));
    }

    ?>
        <b>
           <h2>   
            <tr> 
                <td>Total number of cases submitted</td> 
                <td>
                    <?php 
                        $result = mysqli_query($conn, "SELECT count(complaintStatus) AS submittedNo FROM complaint");
                        $submittedNo = mysqli_fetch_assoc($result);
                        echo $submittedNo['submittedNo'];
                     ?> 
                </td> 
            </tr>

            <tr> 
                <td>Total number of cases resolved</td> 
                <td>
                    <?php 
                        $result = mysqli_query($conn, "SELECT count(complaintStatus) AS resolvedNo FROM complaint WHERE complaintStatus = 'Resolved' ");
                        $resolvedNo = mysqli_fetch_assoc($result);
                        echo $resolvedNo['resolvedNo'];
                    ?>
                </td> 
            </tr>        
            <tr> 
                <td>Total number of cases rejected</td> 
                <td>
                    <?php 
                        $result = mysqli_query($conn, "SELECT count(complaintStatus) AS rejectedNo FROM complaint WHERE complaintStatus = 'Rejected+'");
                        $rejectedNo = mysqli_fetch_assoc($result);
                        echo $rejectedNo['rejectedNo'];
                     ?>
                </td> 
            </tr>

            <tr> 
                <td>Average time to solve cases</td> 
                <td> 
                </td> 
            </tr>
            </h2>
        </b>
        </table>
    </body>
</html>   