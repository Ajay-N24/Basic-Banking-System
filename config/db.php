<?php
$con = mysqli_connect("localhost","root","","customers");
if(!$con)
{
    die("Failed ".mysqli_connect_error());
}
?>