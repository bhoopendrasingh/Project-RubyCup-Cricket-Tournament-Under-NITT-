<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #000079;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form action="login.php" method="post" name="form1" target="_self" id="form1">
  <div align="right">
      If you have an account then click  this buttton for Sign in
    <input type="submit" name="Submit2" value="Login" />
  </div>
</form>
<p>&nbsp;</p>
<table width="1300" height="300" align="center" border="1">
  <tr>
    <td width="1200" height="294"  align="center" background="signup.jpg">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<body bgcolor="#99FF99"><center><strong><strong>IF YOU DO NOT HAVE AN ACCOUNT THEN SIGN UP HERE</strong></strong></center><p>&nbsp;</p>
<form action="signup.php" method="post">
  <div align="center"> 
    <table width="269" border="2" bordercolor="#000000" bgcolor="#99FFFF">
      <tr>
        <td width="94"><span class="style1">User Name: </span></td>
        <td width="157"><input name="username" type="text" id="username" /></td>
              </tr>
      <tr>
        <td><span class="style1">Password:</span></td>
        <td><input name="u_pass" type="password" id="u_pass" /></td>
      </tr>
      <tr>
        <td><span class="style1">email:</span></td>
        <td><input name="email" type="text" id="email" /></td>
      </tr>
      <tr>
        <td height="28" colspan="2">
          
          <div align="center">
            <input name="Submit" type="submit" class="style1" value="sign up" />
          </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>


<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('RubyCup',$con) or die (mysql_error());
if (isset($_POST['Submit']))
  {
 $name=$_POST['username'];
 $pass=$_POST['u_pass'];
 $email=$_POST['email'];
  
 if ($name==''){
 echo "<script>alert('Please Enter your name')</script>";
 exit();
 }
 if ($pass==''){
 echo "<script>alert('Please Enter a password')</script>";
 exit();
 }
 if ($email==''){
 echo "<script>alert('Please Enter a email')</script>";
 exit();
 }
else {
 $que= "insert into signup (username,password,email) values ('$name','$pass','$email')";
 if (mysql_query($que))
 {
 echo "<script>window.open('login.php','_self')</script>";
 echo " <script>alert('Registration Successfully..')</script>";
  }
}
}
?>
