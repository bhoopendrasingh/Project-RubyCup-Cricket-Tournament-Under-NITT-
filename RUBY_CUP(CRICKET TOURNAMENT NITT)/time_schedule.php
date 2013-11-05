<?php
   session_start();
   $servername="localhost";
   $username="root";
   $password="";
   $my_db="rubycup";
   $con=  mysql_connect($servername,$username,$password);
   if(!$con){
       die("Connection cannot be made....");
   }
   
   mysql_select_db($my_db,$con);
   $sql=mysql_query("SELECT * FROM team");
   
   $i = 0;
      while($query_run=mysql_fetch_array($query_run))
	    {
		  if($i<2)
		    {
			if($i==0)
			{
		  $tid1 = $query_row['teamid'];
		    }
			if($i==1){
			$tid2 = $query_row['teamid'];
			insert into 
			}
                
         } 

?>

   echo "<br><br><center><h1><b><u>List of Registered Students</u></b></h1><br><br></center>";
   echo "<center><table class='gridtable'>
       <tr>
           <th>Roll No.</th>
           <th>Name</th>
           <th>Dept</th>
           <th>T-Size</th>
           <th>F-Coupon</th>
           <th>Student's Signature</th>
       </tr>";
   
   while ($row = mysql_fetch_array($sql)) {
       echo "<tr>";
       echo "<td>".$row['roll_no']."</td>";
       echo "<td>".$row['name']."</td>";
       echo "<td>".$row['dept']."</td>";
       echo "<td>".$row['t_size']."</td>";
       echo "<td>".$row['f_coupon']."</td>";
       echo "<td colspan='30'>".'      '."</td>";
       echo "</tr>";
    }
   
    echo "</table></center>";
    mysql_close($con);
    echo"<br><br><br>";
    echo"<center><font size='5'><a href='admin_login.php' title='Take Printout'>Print</a></font></center>"
    
 ?>
