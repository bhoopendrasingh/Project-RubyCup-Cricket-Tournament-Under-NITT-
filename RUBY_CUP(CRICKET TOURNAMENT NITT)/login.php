<html>
<head><title>PHP login lage</title>
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {
	color: #330066;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#FFFF99"><center>
  
  <form name="form1" method="post" action="">
    <table width="100%" height="136" border="3" cellspacing="10" bgcolor="red">
      <tr colspan="5">
        <th height="110"><img src="nitt_logo.jpg" width="93" height="100" style="border:3px; height:100; width:100" /></th>
        <th><font color="green" size="10">National Institute of Technology Trichy-620015</font></th>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  <table width="1350" height="280" border="1">
    <tr>
      <td width="1226" height="275" background="bb.png">&nbsp;</td>
    </tr>
  </table>
  <p><strong>LOGIN HERE FOR REGISTRATION OF A TEAM </strong></p>
  </center>
<form action="login.php" method="post">
 
  
  <div align="center">
    <table width="269" border="2" bordercolor="#000000" bgcolor="#99FFFF">
      <tr>
        <td width="94"><span class="style1">User Name: </span></td>
        <td width="157"><input name="username" type="text" id="username"/></td>
      </tr>
      <tr>
        <td><span class="style1">Password:</span></td>
        <td><input name="password" type="password" id="password"/></td>
      </tr>
        
      <tr>
        <td height="28" colspan="2">
            
          <div align="center">
            <input name="login" type="submit" class="style1" value="Login" />
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
if (isset($_POST['login']))
{
$uname=$_POST['username'];
$pass=$_POST['password'];
if($uname=='')
{
echo "<script>window.open<'login.php?user=Please enter user name','_self)</script>";
}
if($pass=='')
{
echo "<script>window.open<'login.php?pass=Please enter password','_self)</script>";
}
else{
$que="select * from signup where username='$uname' AND password='$pass'";
$run=mysql_query($que) or die (mysql_error());
if(mysql_num_rows($run)>0){
   echo "<script> alert('You successfully login.....')</script>";
echo "<script>window.open('teamregist.php','_self')</script>";
    }
	else
	{
	echo 'Please check your password and id And Enter  it again...';
	$pass='';
	$uname='';	
	}
  }
}
?>