<?php
$con=mysqli_connect('localhost','root','','bank') or die(mysqli_connect_error());
$from=$_POST['from'];
$to=$_POST['to'];
$amt=$_POST['amt'];
//$f=$_POST['cust'];
$r=mysqli_query($con,"select * from customers");
$rem=0;
$bal=0;
$c=0;
while($row=mysqli_fetch_array($r))
{
    if(strcasecmp($from,$row['Name'])==0)
    {
        $bal=$row['Balance'];
        $rem=$bal-$amt;
        if($rem>=1000)
       {
        $q1="UPDATE customers SET Balance=$rem where Name='$from'";
                $result=mysqli_query($con,$q1);
                
                $r1=mysqli_query($con,"select * from customers");
        while($row1=mysqli_fetch_array($r1))
        {
            if(strcasecmp($to,$row1['Name'])==0)
            {
                $bal1=$row1['Balance'];
                $tot=$bal1+$amt;
                $id=$row1['id'];
                $q2="UPDATE customers SET Balance=$tot where id=$id";
                $result=mysqli_query($con,$q2);
                echo "<center><img src='success.gif' width='50%' height='50%'>
                <h1 style='color:#2ECC71;font-weight:bold;'>Transaction Successful!</h1>
                </center>";
                $d=$row['Name'];
                $c=$row1['Name'];
                $a=$amt;
                date_default_timezone_set('Asia/Kolkata');
                $date=date('y-m-d H:i:S');
                $q3="INSERT INTO history values('$d','$c','$a','$date')";
               $res= mysqli_query($con,$q3);
               echo "<center>
               <button style='background-color:#2ECC71;color:black;'>
               <a style='color:black;text-decoration:none;font-weight:bold;' href='history.php'>View History</a>
               </button></center>";
                 $c++;
               break;
            }
        }
      }
    else
        echo  "<center>
        <img src='trans.jpg' width='50%' height='50%'><h1 style='color:#2ECC71;font-weight:bold;'>
        Transaction not possible</h1></center>";
    }
}
if($c==0)
{
    echo "<center>
        <img src='nouser.jpg' width='50%' height='60%'>
        <h1 style='color:#2ECC71;font-weight:bold;'>
        No such user! Create account?
        <button style='background-color:#2ECC71'>
        <a href='create.php' style='text-decoration:none;color:black;'>
        Create Account
        </a>
        </button>
        </h1>
        </center>";
}