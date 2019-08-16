<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_NAME','OOPS');

class DB_con
{
	function __construct()
	{
		$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME) or die('error connecting to server'.mysql_error());
		//mysql_select_db(DB_NAME, $conn) or die('error connecting to database->'.mysql_error());
    }

       
    
}

//db connect error testing
//$db = new DB_con();

//calling method to test
//$db->connnect();
?>