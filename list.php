<html>
<head><title>Hobby Lists</title></head>
<body>
<h1>Listing of hobbies</h1>
<? 
include('config.php'); 
echo "<table border=1 >"; 
echo "<th><td></td><td>First Name</td><td>Last Name</td><td>Email</td><td>Gender</td><td>City</td><td>State</td><td>Comments</td><td>Cycling</td><td>Frisbee</td><td>Skiing</td>"; 
echo "</th>"; 
$result = mysql_query("SELECT * FROM `hobby`") or trigger_error(mysql_error()); 

while($row = mysql_fetch_array($result)){ 
	foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
	echo "<tr>";  
	echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a></td><td><a href=delete.php?id={$row['id']}>Delete</a></td> "; 
	echo "<td>{$row['firstname']}</td><td>{$row[lastname]}</td><td>{$row['email']}</td><td>{$row['sex']}</td><td>{$row[city]}</td><td>{$row[state]}</td><td>{$row[comments]}</td>";

	if ($row[hobby_cycling] == 1) {
		echo "<td>Yes</td>";
	} else {
		echo "<td>No</td>";
	}

	if ($row[hobby_frisbee] == 1) {
		echo "<td>Yes</td>";
	} else {
		echo "<td>No</td>";
	}

	if ($row[hobby_skiing] == 1) {
		echo "<td>Yes</td>";
	} else {
		echo "<td>No</td>";
	}

echo "</tr>"; 

} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>
</body>
</html>
