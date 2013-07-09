<?
$pass = true;
$errMsg = "<ul>";

if (empty($_POST[firstName])) {
        $errMsg .= "<li><font color=\"red\">First Name is required!</font></li>";
        $pass = false;
}

if (empty($_POST[lastName])) {
        $errMsg = $errMsg . "<li><font color=\"red\">Last Name is required!</font></li>";
        $pass = false;
}

if (empty($_POST[city])) {
        $errMsg = $errMsg . "<li><font color=\"red\">City is required!</font></li>";
        $pass = false;
}

if (empty($_POST[state])) {
        $errMsg = $errMsg . "<li><font color=\"red\">State is required!</font></li>";
        $pass = false;
}

if (empty($_POST[comments])) {
        $errMsg = $errMsg . "<li><font color=\"red\">Comments are required!</font></li>";
        $pass = false;
}

if (empty($_POST[email])) {
        $errMsg = $errMsg . "<li><font color=\"red\">Email is required!</font></li>";
        $pass = false;
}

if (empty($_POST[gender])) {
        $errMsg = $errMsg . "<li><font color=\"red\">Gender is required!</font></li>";
        $pass = false;
}
?>
