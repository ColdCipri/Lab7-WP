<?php
 $conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");

 $newWebpage="";
        if (isset($_POST['newWebpage'])) { 
         $newWebpage = $_POST['newWebpage']; 
    } 
    $ID="";
        if (isset($_POST['ID'])) { 
         $ID = $_POST['ID']; 
    } 
    
$querys = "UPDATE User set Webpage ='".$newWebpage."' WHERE id ='".$ID."'";
$result = mysqli_query($conn, $querys) or die("QUERY FAILED");

         

            $conn->close();
    
?>
<!DOCTYPE html>


<html>

<body>

<div>

        <form method="POST" action="updateUser.php">
            
            <label>Id</label><br>
            <input type="int" name="ID"><br><br><br><br>

                  
                  <label>New Webpage</label><br>

            <input type="text" name="newWebpage"><br><br><br><br>
            
            
            <input type="submit"><br><br>
           
        </form>
        <button><a href="server.php">Back</a></button>
       <br><br>
       

	

</div>
</body>
</html>

