<?php

$host="localhost";
$username="root";
$password="";
$databasename="Products";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

$searchTerm = $_GET['term'];

$select =mysql_query("SELECT * FROM Products_Details WHERE Product_Name LIKE '%".$searchTerm."%'");
while ($row=mysql_fetch_array($select)) 
{
 $data[] = $row['Product_Name'];
}
//return json data
echo json_encode($data);
?>