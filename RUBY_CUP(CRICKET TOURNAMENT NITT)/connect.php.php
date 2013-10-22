/*<?php
$connect_error = "Could not connected..";
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "RubyCup";

if (mysql_connect($mysql_host,$mysql_user $mysql_pass) || ($mysql_db =='RubyCup'))
{
echo 'type your link here';
}
else
{
echo "You are not connected to server...";
}
?>*/


<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('RubyCup',$con) or die (mysql_error());
?>