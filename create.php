<?php
include('header.php');
?>
<style>
    input,textarea{
        border:none;
        border:1px solid #2ECC71;
    }
    </style>
<center>
    <h1 style="font-weight:bold;color:#2ECC71">Create Account</h1>
    <br><br>
<form action="createuser.php" method="post">
    <table>
        <tr>
    <th>User Name:&nbsp;</th>
    <th><input type="text" maxlength="50" name="user" required></th>
</tr>
  <tr><th><br></th><th></th></tr>
    <tr>
    <th>Password:&nbsp;</th>
    <th><input type="password" name="pass" required></th>
</tr>
<tr><th><br></th><th></th></tr>
<tr>
    <th>Age:&nbsp;</th>
    <th><input type="number" name="age" required></th>
</tR>
<tr><th><br></th><th></th></tr>
    <!--<tr>
    <th>Gender:&nbsp;</th>
    <th><input type="radio" name="gender">&nbsp;Male <input type="radio" name="gender">&nbsp;Female</th>
</tr>
<tr><th><br></th><th></th></tr>-->
    <tr>
    <th>Phone Number:&nbsp;</th>
    <th><input type="text" value="+91" size="2">&nbsp;<input type="number" size="11" maxlength="11" name="phone" required></th>
</tr>
<tr><th><br></th><th></th></tr>
<tr>
    <th>E Mail:</th>
    <th><input type="email" name="email" required>
</tr>
<tr><th><br></th><th></th></tr>
<tr>
    <th>Amount:&nbsp;</th>
    <th><input type="number" name="amt" required></th>
</tr>
<tr><th><br></th><th></th></tr>
<!--<tr>    
    <th>Address:&nbsp;</th>
    <th><textarea rows="3" cols="20" name="address"></textarea></th>
</tr>
<tr><th><br></th><th></th></tr>-->
</table>
<br>
<input type="checkbox" checked>&nbsp;I aggree all the terms and conditions.
<br><br>
    <input type="submit" value="Submit" style="background-color:#2ECC71;color:black;box-shadow:1px 1px #2ECC71;">
</form>
</center>
<?php 
include('footer.php');
?>