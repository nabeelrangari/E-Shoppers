<?php
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("eshopper",$conn);
$sql="insert into reg(username,password,email,mobile,address) values ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[mobile]','$_POST[address]')";
if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}

header('Location:login.php');
mysql_close($conn)

?>