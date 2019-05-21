
<html>
	<head>
		<script type="text/javascript">
			var xmlhttp;
			function getUsers() {
				xmlhttp=GetXmlHttpObject(); 
				if (xmlhttp==null)  {
					alert ("Your browser does not support XMLHTTP!");
					return;
				}
				var url="select.php";
				xmlhttp.open("GET",url,true);
				xmlhttp.send(null);
			}
			
			function GetXmlHttpObject() {
				if (window.XMLHttpRequest) {
					return new XMLHttpRequest();
				}
			        if (window.ActiveXObject) {         
					return new ActiveXObject("Microsoft.XMLHTTP");
				}
				return null;
			} 
		</script>
	</head>
	<body>

    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");

    ?>
        <form method="POST" action="select.php">
            
            <label>Name</label><br>
             <select name="Name">
                <?php
                   

                $querys = "SELECT DISTINCT 'Id', `Name` FROM `User` ";
                $result = mysqli_query($conn, $querys) or die("QUERY FAILED");
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                    echo "<option value=$row[1]>$row[1]</option>";
                }
                ?>
                  </select>
            <br>
             <input type="submit" onclick="getUsers()"><br><br>

        </form>
		
		
		
	</body>
</html>

<?php
 $conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");
   
    $name="";
        if (isset($_POST['Name'])) { 
            $name = $_POST['Name']; 
    }

    $result = mysqli_query($conn, "SELECT Id,Name,Username,Age,Webpage FROM user WHERE Name ='".$name."'");
	echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Username</th><th>Age</th><th>Webpage</th></tr>";

	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['Id'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Username'] . "</td>";
		echo "<td>" . $row['Age'] . "</td>";
		echo "<td>" . $row['Webpage'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conn);
?> 