<?php
$conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");


$ID="";
if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
}

$querys ="DELETE FROM user WHERE id ='".$ID."'";
$result = mysqli_query($conn, $querys) or die("QUERY FAILED");


$conn->close();

?>


<!DOCTYPE html>
<html>
<body>


<html>
<head>
    
</head>

<body>
<div>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");

    ?>
        <form method="POST" action="deleteUser.php">
            
            <label>Cars</label><br>
             <select name="ID">
                <?php
                   

                $querys = "SELECT DISTINCT `Id`, `Name` FROM `User` ";
                $result = mysqli_query($conn, $querys) or die("QUERY FAILED");
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                    echo "<option value='$row[0]'>$row[1]</option>";
                }
                ?>
                  </select><br><br><br>
             <input type="submit"><br><br>
            
        </form>
        <button><a href="server.php">Back</a></button>
       <br><br>
       
</div>
</body>
</html>  

	