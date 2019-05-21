<?php
$conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");



$result = mysqli_query($conn, "SELECT Id, Name, Username, Age, Profile, Email, Webpage FROM User");


echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Username</th><th>Age</th><th>Profile</th><th>Email</th><th>Webpage</th></tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Id'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Profile'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Webpage'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

