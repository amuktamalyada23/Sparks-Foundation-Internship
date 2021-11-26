<style>
   .input{
    
       color:black;
       font-weight:bold;
       padding:10px;
       margin:1%;
   }
   th,td{
       text-align:center;
       padding:10px;
   }
   .cust{
       padding:15px;
       text-align:center;
   }
  /* .alt{
       background-color:#EAFAF1 ;
   }*/
   .text{
       font-weight:bold;
       color:#2ECC71;
   }
    </style>
<?php include('header.php'); 
echo "<center><h1 class='text'>Customer Details</h1><br></center>";
$con=mysqli_connect('localhost','root','','bank') or die(mysqli_connect_error());

$q="select * from customers";
$r=mysqli_query($con,$q);
echo "<center><table cellpadding='15' cellspacing='15' align='center'>
<tr class='alt text'>
<th class='cust'>S No &nbsp;</th>
<th class='cust'>Name&nbsp; </th>
<th class='cust'>E-Mail id &nbsp;</th>
<th class='cust'>Balance &nbsp;</th>
<th class='cust'>Age &nbsp;</th>
<th class='phone'>Phone No. &nbsp; </th>
<th>Action &nbsp;</th></tr>";
while($row=mysqli_fetch_array($r))
{
    $n=$row['Name'];
    echo"<tr><td class='cust'>";
    echo $row['id'];
    echo "</td><td class='cust'>";
    echo $row['Name'];
    echo "</td><td class='cust'>";
    echo $row['e-mail id'];
    echo "</td><td class='cust'>";
    echo $row['Balance'];
    echo "</td><td class='cust'>";
    echo $row['Age'];
    echo "</td><td class='cust'>";
    echo $row['Phone'];
    echo "</td><td class='cust'>";
    echo"<button><a href='transfer.php' class='input'>Transfer</a></button>";
    echo"</td></tr>";
    echo "<tr class='alt'><td class='cust'><br></td><td class='cust'></td><td class='cust'></td><td class='cust'></td><td class='cust'></td></tr>";
}
echo "</table></center>";
include('footer.php');
?>
