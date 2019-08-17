<?php
$con = mysql_connect('localhost','root','');
$connect = mysql_select_db('lap',$con);
if(isset($connect))
{
    echo"Connection Found";
}else{
    echo"NO Connection Found";
}

$query = mysql_query("select * from lap_lawyer_pers") or die(mysql_error());
$x = mysql_fetch_array($query);
$y = mysql_fetch_row($query);

print_r($y);
while ($row=  mysql_fetch_array($query))
{
    
}
?>