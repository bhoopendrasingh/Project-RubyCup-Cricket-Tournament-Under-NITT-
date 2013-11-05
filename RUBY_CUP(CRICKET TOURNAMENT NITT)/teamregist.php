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

<body bgcolor="#99FF99">
<div align="center">
  <table width="1332" height="386" border="1">
    <tr>
      <td width="623" height="314" background="team.jpg">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><strong>WELCOME TO TEAM REGISTRATION</strong></p>
</div>
<form action="teamregist.php" method="post">
  <div align="center">
    <table width="309" border="2" bordercolor="#000000" bgcolor="#99FFFF">
      <tr>
        <td width="125"><span class="style1">TeamID: </span></td>
        <td width="166"><input name="teamid" type="text" id="teamid" /></td>
      </tr>
      <tr>
        <td><span class="style1">DepartmentName:</span></td>
        
                <td><select name="departmentname">
            <option value="none">none</option>
            <option value="Architecture">Architecture</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Computer Applications">Computer Applications</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Chemical Engg">Chemical Engg</option>
            <option value="EEE">EEE</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            
            <option value="Humanities">Humanities</option>
            <option value="ICE">ICE</option>
            <option value="Management Studies">Management Studies</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Mechanical Engg">Mechanical Engg</option>
            <option value="MME">MME</option>
            <option value="Production Engg">Production Engg</option>
            <option value="Physics">Physics</option>
            
        </select></td>
      </tr>
      
      <tr>
        <td height="28" colspan="2"><div align="center">
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
$db=mysql_select_db('rubycup',$con) or die (mysql_error());
if (isset($_POST['Submit']))
  {
 $tid=$_POST['teamid'];
 $dept=$_POST['departmentname'];
   
 if ($tid==''){
 echo "<script>alert('Please Enter a valid team id.')</script>";
 exit();
 }if ($dept==''){
 echo "<script>alert('Please select a department form list')</script>";
 exit();
 }

else {
 $que= "insert into team(departmentname,teamid) values ('$dept',$tid)";
 if (mysql_query($que))
 {
 echo " <script>alert('Registration Successfully...!!!')</script>";
 $i =0;
 while($i <2)
 {
 echo "<script>window.open('player_reg.php','_self') </script>";
  echo " <script>alert('Registration Successfully...!!!')</script>";
  $i++;
  }
   echo "<script>window.open('home.php','_self') </script>";
 exit();
 }
}
}
?>
