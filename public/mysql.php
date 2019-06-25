<?php
// we connect to localhost at port 3306
$link = mysql_connect('mysql', 'root', 'admin');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>