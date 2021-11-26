<?php
$name=$_POST['user'];
$age=$_POST['age'];
$pass=$_POST['pass'];
$phn=$_POST['phone'];
$amt=$_POST['amt'];
$email=$_POST['email'];
$con=mysqli_connect('localhost','root','','Bank');
$q="select * from customers";
$r=mysqli_query($con,$q);
$i=0;
while($row=mysqli_fetch_array($r))
{
    $i=$row['id'];
}
$i=$i+1;

$result=mysqli_query($con,"INSERT INTO customers values('$i', '$name', '$email','$amt', '$pass', '$age',' $phn')");
echo "<center><img src='success.gif' width='50%' height='50%'><h1 style='color:#2ECC71;font-weight:bold;'>";
echo $name;
echo " Account created Successfully!</h1></center>";
?>