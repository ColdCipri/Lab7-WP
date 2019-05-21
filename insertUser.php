    <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");

    
    if (isset($_POST['Id']) && isset($_POST['Name']) && isset($_POST['Username']) && isset($_POST['Age']) && isset($_POST['Profile']) && isset($_POST['Email']) && isset($_POST['Webpage']) ) {

                $val1 = $_POST['Id'];
                $val2 = $_POST['Name'];
                $val3 = $_POST['Username'];
                $val4 = $_POST['Age'];
                $val5 = $_POST['Profile'];
                $val6 = $_POST['Email'];
                $val7 = $_POST['Webpage'];
				
                $stmt = "INSERT INTO user(Id,Name,Username,Age,Profile,Email,Webpage) 
                VALUES ( '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', '$val7')";
            
                 if (mysqli_query($conn,$stmt))
                 {
                     echo "succes!";
            
                 }
                else
                {
                    echo "error " . mysqli_error($conn);
                }
                 
          
            $conn->close();
    }
    ?>
<!DOCTYPE html>

<html>

<body>
<div>

	
	</div>
<div>

        <form method="POST" action="insertUser.php">
            <p>Insert the User</p>
            <label>Id</label><br>
            <input type="text" name="Id"><br>
            <label>Name</label><br>
            <input type="text" name="Name"><br>
            <label>Username</label><br>
            <input type="text" name="Username"><br>
            <label>Age</label><br>
            <input type="text" name="Age"><br>
            <label>Profile</label><br>  
            <input type="text" name="Profile"><br>
            <label>Email</label><br>  
            <input type="text" name="Email"><br>
            <label>Webpage</label><br>  
            <input type="text" name="Webpage"><br>
            
            <br><br><br>
            
            <input type="submit"><br><br>
            
        </form>
        <button><a href="server.php">Back</a></button>
       
   

</div>
</body>
</html>