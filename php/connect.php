<?php
$dbname = 'Glosario';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'localhost';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the database '$dbname'");
$result = mysql_query("SELECT id, name FROM employees");
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Name: %s <br>", $row[0], $row[1]);
}
?>
