<?php 
//$host = "194.47.151.125";
//$username = "et2536t7";
//$port = '3306';
//$password = "konko";
//$database = "et2536";
require 'db.php';
$con=mysqli_connect("$host","$username","$password","$database","$port"); 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

if(isset($_GET['id'])) {
$txt= $_GET['id'];
//var_dump($txt);
$result = mysqli_query($con,"SELECT * FROM harsha where id='$txt'");

while($row = mysqli_fetch_array($result)) 
{ 
 
echo "IP =  ".$row['IP']."<br>"; 
echo "community =  ".$row['COMMUNITY']."<br>"; 
echo "port =  ".$row['PORT']."<br>"; 
 
echo "lost requests =  ".$row['LOST']."<br>";

 
} 

}

mysqli_close($con); 
?>
