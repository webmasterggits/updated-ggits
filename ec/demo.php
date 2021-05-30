<?php
/* Connect to an ODBC database using driver invocation */
$host= "ap-cdbr-azure-southeast-a.cloudapp.net";
	$user="b989f59b258ccd";
	$pwd="1ca62c93";
	$db="deepak";
//	Server: gatepass.database.windows.net,1433 \r\n
//	SQL Database: gatepass\r\
//	nUser Name: user\r\n\r\n
//	PHP Data Objects(PDO) 
//	Sample Code:\r\n\r\\
/*ntry {\r\n   
		$conn = new PDO 
		( "sqlsrv:server = tcp:ap-cdbr-azure-southeast-a.cloudapp.net; Database = gatepass", 
			\"b989f59b258ccd\", \"{1ca62c93}\");\r\n  
			  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\
			  ncatch
			   ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   
 die(print_r($e));\r\n}\r\n\r
 SQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"user@gatepass\", \"pwd\" => \"{your_password_here}\", 
 \"Database\" => \"gatepass\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:gatepass.database.windows.net,1433\";
 \r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

	//$conn>setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );

try {
	$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pwd);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
*/

/* Delete all rows from the FRUIT table */
$count = $conn->exec("select * from Employees");

/* Return number of rows that were deleted */
print("Deleted $count rows.\n");
?>










