<?php

include 'conn.php';

if(isset($_GET['search'])) {
	$search = $_GET['search'];
	$rs = mysql_query("select * from persons where doctor like '%".$search."%' or
	                   recipient like '%".$search."%' or
	                   rec_pid like '%".$search."%' or
	                   diagnosis like '%".$search."%' or
	                   rhesus like '%".$search."%' or
	                   fibrosis like '%".$search."%' or
	                   bilirubin like '%".$search."%' or
	                   ast like '%".$search."%' or
	                   alt like '%".$search."%' or
	                   ggt like '%".$search."%' or
	                   cr like '%".$search."%' or
	                   inr like '%".$search."%' or
	                   ascites like '%".$search."%' or
	                   albumin like '%".$search."%' or
	                   encephalopathy like '%".$search."%' or
	                   bleeding like '%".$search."%' or
	                   rec_address like '%".$search."%' or
	                   rec_phone like '%".$search."%' or
	                   child like '%".$search."%' or
	                   meld like '%".$search."%' or
   	                   rec_details like '%".$search."%' or
	                   donor like '%".$search."%' or
	                   don_pid like '%".$search."%' or
	                   don_age like '%".$search."%' or
	                   relationship like '%".$search."%' or
	                   don_address like '%".$search."%' or
	                   don_phone like '%".$search."%' or
	                   don_rhesus like '%".$search."%' or
	                   don_details like '%".$search."%'
	                   ");



}
else
	$rs = mysql_query('select * from persons');


$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>