<?php

session_start();


$con =mysqli_connect('root','');

mysqli_select_db($con ,'travel_db');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name ='$name'&& password = '$pass'";

$result =mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($name=='Admin' && $pass=='Admin@123') 
{
$s = "select * from book_form ";

$result =mysqli_query($con,$s);

$num = mysqli_num_rows($result);
	echo "<table border=1>";
echo "<tr>";
echo "<th>ID </th>";
echo "<th>Name </th>";
echo "<th>Email </th>";
echo "<th>Phone </th>";
echo "<th>Address </th>";
echo "<th>Location </th>";
echo "<th>Guests </th>";
echo "<th>Arrivals </th>";
echo "<th>Leavings</th>";

while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td> $row[0]</td>";
	echo "<td> $row[1]</td>";
	echo "<td> $row[2]</td>";
	echo "<td> $row[3]</td>";
	echo "<td> $row[4]</td>";
	echo "<td> $row[5]</td>";
	echo "<td> $row[6]</td>";
	echo "<td> $row[7]</td>";
	echo "<td> $row[8]</td>";
	echo "</tr>";

}
}
else
{
	if($num==1)
{
	$_SESSION['username']=$name;
	header('location:book.php');
}
else
{
	header('location:book.php');
	
}
}


?>