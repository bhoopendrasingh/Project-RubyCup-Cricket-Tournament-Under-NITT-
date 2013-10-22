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
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#99FF99"><center>
  <form id="form1" name="form1" method="post" action="login.php">
    <div align="right"> Click here for another team registration
      <input name="Submit2" type="submit" id="Submit" value="LOGOUT" />
    </div>
  </form>
  <form id="form2" name="form2" method="post" action="match1.php">
    <div align="right"> Click here for match
      <input type="submit" name="Submit3" value="MATCH" />
    </div>
  </form>
  <p>&nbsp;</p>
  <table width="1127" height="219" border="1">
    <tr>
      <td width="1115" height="213" background="signup.jpg"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
    </tr>
  </table>
  <p class="style2">WELCOME TO PLAYER REGISTRATION FOR THE TEAM</p>
  </center>
<form action="player_reg.php"  method="post" target="_self">
  
  
  <div align="center">
    <table width="400" border="3" bordercolor="#000000" bgcolor="#99FFFF">
      <tr>
        <td width="200"><span class="style1">PLAYER NAME: </span></td>
        <td width="100"><input name="pname" type="text" id="pname" /></td>
      </tr>
        
       <tr>
         <td><span class="style1">PLAYER ROLL_NO: </span></td>
         <td><input name="pid_Rollno" type="text" id="pid_Rollno" /></td>
      </tr>
        
        <tr>
          <td><span class="style1">PLAYER SPECIALIZATION: </span></td>
          <td><input name="specialization" type="text" id="specialization" /></td>
      </tr>
        
       <tr>
         <td><span class="style1">TEAM ID FOR REGIST PLAYER: </span></td>
         <td><input name="Team_id" type="text" id="Team_id" /></td>
      </tr>
        
        
      <tr>
        <td height="30" colspan="3">
            
          <div align="center">
            <input name="Submit" type="submit" class="style1" value="submit" />
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
 $pnm=$_POST['pname'];
 $prno=$_POST['pid_Rollno'];
 $spcz=$_POST['specialization'];
 $tid=$_POST['Team_id'];
 
 if ($pnm==''){
 echo "<script>alert('Please Enter player name')</script>";
 exit();
 }if ($prno==''){
 echo "<script>alert('Please enter the palyerr roll number...')</script>";
 exit();
 }
 if ($spcz==''){
 echo "<script>alert('Please enter the palyer's specialization...')</script>";
 exit();
 }
if ($tid==''){
 echo "<script>alert('Please enter the team id which is already registered...')</script>";
 exit();
 }


else {
 $que= "insert into player (pname,pid_Rollno,specialization,Team_id) values ('".$pnm."','". $prno ."','".$spcz."',".$tid."')";
 if (mysql_query($que))
 {
 //echo " <script>alert('Registration Successfully...!!!')</script>";

 echo "<script>window.open('player_reg.php','_self') </script>";
 echo " <script>alert('Registration Successfully...!!!')</script>";
 }
// echo "<script>window.open('player_reg.php','_self') </script>";
 }
}
?>
