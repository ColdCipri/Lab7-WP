<?php
$conn = mysqli_connect('localhost', 'root', '', 'usersdb') or die("COULD NOT CONNECT");
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
	SELECT Id,Name,Username,Age,Profile,Email,Webpage FROM user
	WHERE Name LIKE '%".$search."%'";
}
else
{
    $query = "
	SELECT Id,Name,Username,Age,Profile,Email,Webpage FROM user ORDER BY Id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '<div >
					<table border=1>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Username</th>
							<th>Age</th>
							<th>Profile</th>
							<th>Email</th>
							<th>Webpage</th>
						</tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
			<tr>
				<td>'.$row["Id"].'</td>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Username"].'</td>
				<td>'.$row["Age"].'</td>
				<td>'.$row["Profile"].'</td>
				<td>'.$row["Email"].'</td>
				<td>'.$row["Webpage"].'</td>
			</tr>
		';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}
?>