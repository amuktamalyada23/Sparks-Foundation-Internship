<style>
    .cust{
       padding:15px;
       text-align:center;
   }
   .alt{
       color:#2ECC71;
       font-weight:bold;
   }
</style>
<?php
include('header.php');
echo "<center><h1 class='alt'>Transaction History</h1><br><br>";
echo "<table cellpadding='15' cellspacing='15' align='center'>
    <tr class='alt'>
        <th class='cust'>Debitor's Name</th>
        <th class='cust'>Creditor's Name</th>
        <th class='cust'>Amount</th>
        <th class='cust'>Date and time</th>
</tr>";
$con=mysqli_connect('localhost','root','','bank') or die(mysqli_connect_error());
$q="Select * from history";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_array($r))
{
    echo "<tr><th class='cust'>";
    echo $row['Debitor'];
    echo "</th><th class='cust'>";
    echo $row['Creditor'];
    echo "</th><th class='cust'>";
    echo $row['Amount'];
    echo "</th><th class='cust'>";
    echo $row['Dt'];
    echo "</th></tr>";
    echo "<tr><th></th><th></th><th></th><th></th></tr>";
}

echo "</table></center>";
include('footer.php');
?>