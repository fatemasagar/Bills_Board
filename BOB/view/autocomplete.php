<?php
$host="localhost";

$username="root";
$password="";
$databasename="Products";

$connect=@mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if ( array_key_exists ('term' , $_GET ) ) {
	$searchTerm = $_GET['term'];
#	echo $searchTerm ;
}
else 
{
	echo "_GET not available" ;
	$searchTerm = "Curd" ;
}


$query = "SELECT Product_Name FROM Products_Details WHERE Product_Name LIKE '%".$searchTerm."%'" ;
#echo $query ;
$select =mysql_query( $query );
#echo "Something\r\n" ;
$array = mysql_fetch_array($select) ;
#print_r($array) ;

$data = array() ;

$middleString = "" ;

if ( is_array($array) || is_object($array) )
{
	foreach ( $array as $element ) 
	{
		array_push ( $data , $element ) ;
	#	echo $element . "\r\n" ;
		$middleString =  $middleString . "\"" . $element . "\"," ;	
	#	echo $middleString . "\r\n" ;
	}

}

$middleString = mb_substr($middleString, 0, -1);

#print_r($data) ;

$jsvar = "var result = [" . $middleString . "] ; ";
#echo $jsvar ;
echo json_encode ($data);

$returncode = json_last_error () ;
if ( $returncode == JSON_ERROR_NONE )
{
#echo "No error" ;	
}

#echo json_last_error() ;
//return json data

#var countries = ["Afghanistan","Albania","Algeria","Andorra"];

#echo "autocomplete(document.getElementById(\"pname\"), jsvar) ; " ;


?>
