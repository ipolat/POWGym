<?php  

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
$conn =mysqli_connect('localhost','root','','') or die('Connection failed'.mysqli_connect_error());
    if (isset($_POST['name']) && isset ($_POST['email']) && isset ($_POST['phone']));
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];


        $sql= "INSERT INTO "
?>  
