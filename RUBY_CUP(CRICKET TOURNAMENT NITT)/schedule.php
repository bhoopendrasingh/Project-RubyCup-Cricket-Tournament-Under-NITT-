<html>
<head><title>PHP login lage</title>
<style type="text/css">
<!--
.style1 {font-weight: bold}
body,td,th {
	color: #000000;
	font-size: 14px;
}
body {
	background-color: #66FFCC;
	background-repeat: no-repeat;
}
.style4 {
	color: #FF3300;
	font-weight: bold;
}
.style8 {font-weight: bold; color: #660000; }
.style9 {color: #0000FF}
.style10 {color: #FF3300; font-weight: bold; font-size: 24px; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<center>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="">
    <table width="102%" height="130" border="3" cellspacing="10" bgcolor="#99FFFF">
      <tr colspan="5">
        <th height="110"><img src="nitt_logo.jpg" width="83" height="71" style="border:3px; height:100; width:100" /></th>
        <th><span class="style8"><font size="10">National Institute of Technology Trichy-620015</font></span></th>
      </tr>
    </table>
  </form>
  
  <p class="style4">&nbsp;</p>
  <p class="style4">&nbsp;</p>
  <p class="style10">WELCOME TO MAKE THE SCHEDULE FOR MATCHES IN RUBYCUP </p>
  <p class="style4">&nbsp;</p>
</center>
<form action="login.php" method="post">
 
  
  <div align="center">
    <table width="874" height="116" border="2" bordercolor="#000000" bgcolor="#99FFFF">
      <tr>
        <td width="179" height="30"><div align="center" class="style9">MATCH ID </div></td>
        <td width="179"><div align="center" class="style9">TEAM 1 ID </div></td>
        <td width="179"><div align="center" class="style9">TEAM 2 ID </div></td>
        <td width="179"><div align="center" class="style9">DATE_TIME</div></td>
        <td width="122"><div align="center" class="style9">MATCH RESULT</div></td>
      </tr>
      <tr>
        <td height="35"><input name="mid" type="text" class="style1" id="mid"/></td>
        <td><input name="t1id" type="text" class="style1" id="t1id"/></td>
        <td><input name="t2id" type="text" class="style1" id="t2id"/></td>
        <td><input name="dt" type="text" class="style1" id="dt"/></td>
        <td>
          <div align="center">
            <select name="result">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
        </div></td></tr>
        			
		
      <tr>
        <td height="39" colspan="5">
            
          <div align="center">
            <input name="login" type="submit" class="style1" value="Submit" />
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
$mid=$_POST['mid'];
$t1_id=$_POST['t1id'];
$t2_id=$_POST['t2id'];
$date_time=$_POST['dt'];
$result=$_POST['result'];
if($mid=='')
{
echo "<script>alert('Please enter match id...')</script>";
}
if($t1_id=='')
{
echo "<script>alert('Please enter team 1st id for match,which is registered for tournament...')</script>";
}
if($t2_id=='')
{
echo "<script>alert('Please enter team 2nd_id for match,which is registered for tournament...')</script>";
}

if($result==0)
{
$result = "NOT DECLERED";
}
if($result==1)
{
$result = $t1_id;
}
if($result==2)
{
$result = $t2_id;
}
if($result==3)
{
$result = "MATCH DRAW";
}

if($date_time=='')
{
echo "<script>alert('Please enter date and time for the match...')</script>";
}


else{
$que="select teamid from team where teamid='$t1_id'";
$quer="select teamid from team where teamid='$t2_id'";
$run=mysql_query($que) or die (mysql_error());
$runn=mysql_query($quer) or die (mysql_error());
  
if((mysql_num_rows($run)>0) AND (mysql_num_rows($runn)>0)){
  if($t1_id != $t2_id)
     {
	  insert into schedule_match (match_id,team1_id,team2_id,match_datetime,winner_team_id) values ('".mid."','".$t1_id."','".$t2_id."','".$date_time."','".$result."');
   echo "<script> alert('You successfully submitted schedule...')</script>";
     }
	else
	{
	echo "<script>alert('Both team id ,which are registered or not...')</script>";
	}
  }
}
?>

