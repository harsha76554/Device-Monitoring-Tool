<?php
require 'find.php';
//$host = "194.47.151.125";
//$username = "et2536t7";
//$password = "konko";
//$database = "et2439t7";
//$port = "3306";

// Create connection
$conn = mysqli_connect($host, $username,$password,$database,$port);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
} 
echo "Connected successfully";

//selecting table

$table = "SELECT * FROM harsha ORDER BY id;";
$result = mysqli_query($conn,$table);

?>
<html>
<head>
     <title>Assignment-4 </title>
</head>
<body>
     <table style="width:60%" border="1" cellpadding="1" cellspacing="1">
<tr>
    <th>id</th>
    <th>IP</th>
    <th>PORT</th>
    <th>COMMUNITY</th>
   
    <th>status</th>
</tr>

<?php
    
   if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
 // var_dump($row);
  echo "<tr>"; 
      
  echo "<td>".$row['id']."</td>";
  echo "<td><a href='details.php?id=".$row['id']."'>".$row['IP']."</a></td>";
  echo "<td>".$row['PORT']."</td>";
  echo "<td>".$row['COMMUNITY']."</td>";
  


if($row['LOST']>0&&$row['LOST']<15){
$p=$row['LOST'];
$sh=dechex(16776958-($p*257));

echo"<td bgcolor='$sh'>". "</td>";
}
else if($row['LOST']>14&&$row['LOST']<=30)
{
$p=$row['LOST']-14;
$sh=dechex(16773103-($p*4112));
echo"<td bgcolor='$sh'>". "</td>";
}
else if($row['LOST']>30){
echo"<td bgcolor='#FF0000'>". "</td>";
}

else{
echo"<td bgcolor='#FFFFFF'>". "</td>";
}



  echo "</tr>";

     }
} else {
     echo "0 results";
} 


?>

</body>
</html>
