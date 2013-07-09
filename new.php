<html>
<head><title>Adding new hobby</title></head>
<body>
<h1>Adding new hobby</h1>
<?
include('config.php'); 

if (isset($_POST['submitted'])) { 
	foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 

	include 'validation.php';

	if ($pass) {
		$sql = "INSERT INTO `hobby`(`firstName`,`lastName`,`email`,`sex`,`city`,`state`,`comments`,`hobby_cycling`,`hobby_frisbee`,`hobby_skiing`) VALUES('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[gender]','$_POST[city]','$_POST[state]','$_POST[comments]',"; 

		if ($_POST[cycling] == 1) {
		 $sql = $sql . "1,";
		} else {
		 $sql = $sql . "0,";
		}

		if ($_POST[frisbee] == 1) {
		  $sql = $sql . "1,";
		} else {
		  $sql = $sql . "0,";
		}

		if ($_POST[skiing] == 1) {
		  $sql = $sql . "1)";
		} else {
		  $sql = $sql . "0)";
		}

		mysql_query($sql) or die(mysql_error()); 
		echo "Added row.<br />";
	} else {
	  echo $errMsg . "</ul>";
	} 
	echo "</br><a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<table>
	<tr>
		<td>First Name:</td><td><input type="text" name="firstName"/></td>
	</tr>
	<tr>
		<td>Last Name:</td><td><input type="text" name="lastName"/></td>
	</tr>
	<tr>
		<td>Email:</td><td><input type="text" name="email"/></td>
	</tr>
	<tr>
		<td>Gender:</td><td><input type="radio" name="gender" value="M"/>Male&nbsp;&nbsp; <input type="radio" name="gender" value="F"/> Female</td>
	</tr>
	<tr>
		<td>City:</td><td><input type="text" name="city" /></td>
	</tr>
	<tr>
		<td>State:</td>
		<td>
		<select name="state"> 
		<option value="" selected="selected">Select a State</option> 
		<option value="AL">Alabama</option> 
		<option value="AK">Alaska</option> 
		<option value="AZ">Arizona</option> 
		<option value="AR">Arkansas</option> 
		<option value="CA">California</option> 
		<option value="CO">Colorado</option> 
		<option value="CT">Connecticut</option> 
		<option value="DE">Delaware</option> 
		<option value="DC">District Of Columbia</option> 
		<option value="FL">Florida</option> 
		<option value="GA">Georgia</option> 
		<option value="HI">Hawaii</option> 
		<option value="ID">Idaho</option> 
		<option value="IL">Illinois</option> 
		<option value="IN">Indiana</option> 
		<option value="IA">Iowa</option> 
		<option value="KS">Kansas</option> 
		<option value="KY">Kentucky</option> 
		<option value="LA">Louisiana</option> 
		<option value="ME">Maine</option> 
		<option value="MD">Maryland</option> 
		<option value="MA">Massachusetts</option> 
		<option value="MI">Michigan</option> 
		<option value="MN">Minnesota</option> 
		<option value="MS">Mississippi</option> 
		<option value="MO">Missouri</option> 
		<option value="MT">Montana</option> 
		<option value="NE">Nebraska</option> 
		<option value="NV">Nevada</option> 
		<option value="NH">New Hampshire</option> 
		<option value="NJ">New Jersey</option> 
		<option value="NM">New Mexico</option> 
		<option value="NY">New York</option> 
		<option value="NC">North Carolina</option> 
		<option value="ND">North Dakota</option> 
		<option value="OH">Ohio</option> 
		<option value="OK">Oklahoma</option> 
		<option value="OR">Oregon</option> 
		<option value="PA">Pennsylvania</option> 
		<option value="RI">Rhode Island</option> 
		<option value="SC">South Carolina</option> 
		<option value="SD">South Dakota</option> 
		<option value="TN">Tennessee</option> 
		<option value="TX">Texas</option> 
		<option value="UT">Utah</option> 
		<option value="VT">Vermont</option> 
		<option value="VA">Virginia</option> 
		<option value="WA">Washington</option> 
		<option value="WV">West Virginia</option> 
		<option value="WI">Wisconsin</option> 
		<option value="WY">Wyoming</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Comments:</td><td><textarea rows="2" cols="50" name="comments"></textarea></td>
	</tr>
	<tr>
		<td>Cycling:</td><td><input type="checkbox" name="cycling" value="1"/></td>
	</tr>
	<tr>
		<td>Frisbee:</td><td><input type="checkbox" name="frisbee" value="1"/></td>
	</tr>
	<tr>
		<td>Skiing:</td><td><input type="checkbox" name="skiing" value="1"/></td>
	</tr>
</table>
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
</body>
</html>
