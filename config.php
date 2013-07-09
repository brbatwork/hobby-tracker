<?php
// connect to db
$link = mysql_connect('localhost', 'username', 'password');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('hobbies') ) {
    die ('Can\'t use hobbies : ' . mysql_error());
}
?>
