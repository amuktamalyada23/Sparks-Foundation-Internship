<?php include('header.php');?>
<style>
.input{
    border:none;
    border:1px solid #2ECC71;
    box-shadow: 1px 1px #2ECC71;
}
table{
    border-spacing:30px;
}
h3{
    color:#2ECC71;
    font-weight:bolder;
}
</style>
<center>
    <h3>Transfer Money</h3>
  
<form action="connect.php" method="post">
   <table cellspacing="5">
       <tr>
          <th>  Debitor's Account:</th>&nbsp;&nbsp;&nbsp;&nbsp;
          <th><input type="text" name="from" maxlength="50" class="input" ></th>
    <br><br>
</tr>
<tr><th><br></th><th></th></tr>
<tr>
    <th>
    Creditor's Account:&nbsp;
</th>&nbsp;&nbsp;&nbsp;&nbsp;
<th><input type="text" name="to" maxlength="50" class="input" required>
<!--<select name="to">
   <option value="Swarna">Swarna</option>
   <option value="Srija">Srija</option>
   <option value="Riya">Riya</option>
   <option value="Thanuja">Thanuja</option>
   <option value="Priyanka">Priyanka</option>
   <option value="Akshana">Akshana</option>
   <option value="Divya">Divya</option>
   <option value="Shanthi">Shanthi</option>
   <option value="Shermi">Shermi</option>
   <option value="Lekha">Lekha</option>
</select>-->
</th>
    <br><br>
</tr>
<tr><th><br></th><th></th></tr>

<tr>
   <th> Amount:</th> &nbsp;&nbsp;&nbsp;&nbsp;
   <th><input type="number" maxlength="50" class="input" name="amt" required></th>
    <br><br>
</tr>
<tr><th><br></th><th></th></tr>
</table>
    <input type="submit" value="Submit" name="submit" class="input">
</form>
</center>
<?php include('footer.php');?>