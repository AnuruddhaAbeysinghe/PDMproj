<?php
$con = mysql_connect("localhost","root","");

if (!$con)
{
    echo "Error";
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("finaldb", $con);

?>
