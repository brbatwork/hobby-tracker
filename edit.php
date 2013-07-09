<html>
<head><title>Add new row</title></head>
<body>
<h1>Edit hobby</h1>
<?
include('config.php');
if (isset($_GET['id']) ) {
	$id = (int) $_GET['id'];

if (isset($_POST['submitted'])) {
	foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
	$sql = "UPDATE `hobby` SET `firstname` = '$_POST[firstName]', `lastname` = '$_POST[lastName]', `email`= '$_POST[email]', `sex` = '$_POST[gender]', `city` = '$_POST[city]', `state` = '$_POST[state]', `comments` = '$_POST[comments]',"; 

	if ($_POST[cycling] == 1) {
		$sql = $sql . "hobby_cycling = 1,";
	} else {
		$sql = $sql . "hobby_cycling = 0,";
	}

	if ($_POST[frisbee] == 1) {
		$sql = $sql . "hobby_frisbee = 1,";
	} else {
		$sql = $sql . "hobby_frisbee = 0,";
	}

	if ($_POST[skiing] == 1) {
		$sql = $sql . "hobby_skiing = 1 ";
	} else {
		$sql = $sql . "hobby_skiing = 0 ";
	}

	$sql = $sql . " WHERE `id` = '$id'";

	include('validation.php');

	if ($pass) {
		mysql_query($sql) or die(mysql_error());
		echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
		echo "<a href='list.php'>Back To Listing</a>";
	} else {
		echo $errMsg;
	}
}

$row = mysql_fetch_array ( mysql_query("SELECT * FROM `hobby` WHERE `id` = '$id' "));
?>

<form action='' method='POST'>
<table>
        <tr>
                <td>First Name:</td><td><input type="text" name="firstName" value="<?= $row[firstname]; ?>"/></td>
        </tr>
        <tr>
                <td>Last Name:</td><td><input type="text" name="lastName" value="<?= $row[lastname]; ?>"/></td>
        </tr>
        <tr>
                <td>Email:</td><td><input type="text" name="email" value="<?= $row[email]; ?>"/></td>
        </tr>
        <tr>
                <td>Gender:</td><td><input type="radio" name="gender" value="M" <? if ($row[sex] == 'M') echo "checked"; ?>/>Male&nbsp;&nbsp; <input type="radio" name="gender" value="F" <? if ($row[sex] == 'F') echo "checked"; ?>/> Female</td>
        </tr>
        <tr>
                <td>City:</td><td><input type="text" name="city" value="<?= $row[city];?>"/></td>
        </tr>
        <tr>
                <td>State:</td>
                <td>
                <select name="state">
                <option value="" <? if ($row[state] == "") echo "selected=\"selected\""; ?>>Select a State</option>
                <option value="AL" <? if ($row[state] == "AL") echo "selected=\"selected\""; ?> >Alabama</option>
                <option value="AK" <? if ($row[state] == "AK") echo "selected=\"selected\""; ?> >Alaska</option>
                <option value="AZ" <? if ($row[state] == "AZ") echo "selected=\"selected\""; ?> >Arizona</option>
                <option value="AR" <? if ($row[state] == "AR") echo "selected=\"selected\""; ?> >Arkansas</option>
                <option value="CA" <? if ($row[state] == "CA") echo "selected=\"selected\""; ?> >California</option>
                <option value="CO" <? if ($row[state] == "CO") echo "selected=\"selected\""; ?> >Colorado</option>
                <option value="CT" <? if ($row[state] == "CT") echo "selected=\"selected\""; ?> >Connecticut</option>
                <option value="DE" <? if ($row[state] == "DE") echo "selected=\"selected\""; ?> >Delaware</option>
                <option value="DC" <? if ($row[state] == "DC") echo "selected=\"selected\""; ?> >District Of Columbia</option>
                <option value="FL" <? if ($row[state] == "FL") echo "selected=\"selected\""; ?> >Florida</option>
                <option value="GA" <? if ($row[state] == "GA") echo "selected=\"selected\""; ?> >Georgia</option>
                <option value="HI" <? if ($row[state] == "HI") echo "selected=\"selected\""; ?> >Hawaii</option>
                <option value="ID" <? if ($row[state] == "ID") echo "selected=\"selected\""; ?> >Idaho</option>
                <option value="IL" <? if ($row[state] == "IL") echo "selected=\"selected\""; ?> >Illinois</option>
                <option value="IN" <? if ($row[state] == "IN") echo "selected=\"selected\""; ?> >Indiana</option>
                <option value="IA" <? if ($row[state] == "IA") echo "selected=\"selected\""; ?> >Iowa</option>
                <option value="KS" <? if ($row[state] == "KS") echo "selected=\"selected\""; ?> >Kansas</option>
                <option value="KY" <? if ($row[state] == "KY") echo "selected=\"selected\""; ?> >Kentucky</option>
                <option value="LA" <? if ($row[state] == "LA") echo "selected=\"selected\""; ?> >Louisiana</option>
                <option value="ME" <? if ($row[state] == "ME") echo "selected=\"selected\""; ?> >Maine</option>
                <option value="MD" <? if ($row[state] == "MD") echo "selected=\"selected\""; ?> >Maryland</option>
                <option value="MA" <? if ($row[state] == "MA") echo "selected=\"selected\""; ?> >Massachusetts</option>
                <option value="MI" <? if ($row[state] == "MI") echo "selected=\"selected\""; ?> >Michigan</option>
                <option value="MN" <? if ($row[state] == "MN") echo "selected=\"selected\""; ?> >Minnesota</option>
                <option value="MS" <? if ($row[state] == "MS") echo "selected=\"selected\""; ?> >Mississippi</option>
                <option value="MO" <? if ($row[state] == "MO") echo "selected=\"selected\""; ?> >Missouri</option>
                <option value="MT" <? if ($row[state] == "MT") echo "selected=\"selected\""; ?> >Montana</option>
                <option value="NE" <? if ($row[state] == "NE") echo "selected=\"selected\""; ?> >Nebraska</option>
                <option value="NV" <? if ($row[state] == "NV") echo "selected=\"selected\""; ?> >Nevada</option>
                <option value="NH" <? if ($row[state] == "NH") echo "selected=\"selected\""; ?> >New Hampshire</option>
                <option value="NJ" <? if ($row[state] == "NJ") echo "selected=\"selected\""; ?> >New Jersey</option>
                <option value="NM" <? if ($row[state] == "NM") echo "selected=\"selected\""; ?> >New Mexico</option>
                <option value="NY" <? if ($row[state] == "NY") echo "selected=\"selected\""; ?> >New York</option>
                <option value="NC" <? if ($row[state] == "NC") echo "selected=\"selected\""; ?> >North Carolina</option>
                <option value="ND" <? if ($row[state] == "ND") echo "selected=\"selected\""; ?> >North Dakota</option>
                <option value="OH" <? if ($row[state] == "OH") echo "selected=\"selected\""; ?> >Ohio</option>
                <option value="OK" <? if ($row[state] == "OK") echo "selected=\"selected\""; ?> >Oklahoma</option>
                <option value="OR" <? if ($row[state] == "OR") echo "selected=\"selected\""; ?> >Oregon</option>
                <option value="PA" <? if ($row[state] == "PA") echo "selected=\"selected\""; ?> >Pennsylvania</option>
                <option value="RI" <? if ($row[state] == "RI") echo "selected=\"selected\""; ?> >Rhode Island</option>
                <option value="SC" <? if ($row[state] == "SC") echo "selected=\"selected\""; ?> >South Carolina</option>
                <option value="SD" <? if ($row[state] == "SD") echo "selected=\"selected\""; ?> >South Dakota</option>
                <option value="TN" <? if ($row[state] == "TN") echo "selected=\"selected\""; ?> >Tennessee</option>
                <option value="TX" <? if ($row[state] == "TX") echo "selected=\"selected\""; ?> >Texas</option>
                <option value="UT" <? if ($row[state] == "UT") echo "selected=\"selected\""; ?> >Utah</option>
                <option value="VT" <? if ($row[state] == "VT") echo "selected=\"selected\""; ?> >Vermont</option>
                <option value="VA" <? if ($row[state] == "VA") echo "selected=\"selected\""; ?> >Virginia</option>
                <option value="WA" <? if ($row[state] == "WA") echo "selected=\"selected\""; ?> >Washington</option>
                <option value="WV" <? if ($row[state] == "WV") echo "selected=\"selected\""; ?> >West Virginia</option>
                <option value="WI" <? if ($row[state] == "WI") echo "selected=\"selected\""; ?> >Wisconsin</option>
                <option value="WY" <? if ($row[state] == "WY") echo "selected=\"selected\""; ?> >Wyoming</option>
                </select>
                </td>
        </tr>
        <tr>
                <td>Comments:</td><td><textarea rows="2" cols="50" name="comments"><?= $row['comments'] ?></textarea></td>
        </tr>
        <tr>
                <td>Cycling:</td><td><input type="checkbox" name="cycling" value="1" <? if ($row[hobby_cycling] == 1) echo "checked"; ?>/></td>
        </tr>
        <tr>
                <td>Frisbee:</td><td><input type="checkbox" name="frisbee" value="1" <? if ($row[hobby_frisbee] == 1) echo "checked"; ?>/></td>
        </tr>
        <tr>
                <td>Skiing:</td><td><input type="checkbox" name="skiing" value="1" <? if ($row[hobby_skiing] == 1) echo "checked"; ?>/></td>
        </tr>
</table>

<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' />
</form>
<? } ?>
</body>
</html>
