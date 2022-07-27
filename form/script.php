<?php

$servername = "localhost";
$username ="root";
$dbpassword ="";
$dbname="form";

$conn = mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
    echo"connection failure";
    }
 echo "connection estabilished";
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $a = $b = $c = $d = '' ;

    $a=$_POST['name'];
    $b=$_POST['mail'];
    $c=$_POST['subject'];
    $d=$_POST['message'];
//     echo '$a' ;
//     echo '$b';
//     echo '$c';
//     echo '$d';

    $sql = "INSERT INTO data ( name, mail, subject, message) VALUES ('$a','$b','$c','$d')";
    header("Refresh: 0.5; url=index.php");
    mysqli_query($conn, $sql) or die ("query failed");
    echo '<script> alert("data submited")</script>';
    
    mysqli_close($conn);
}
?>