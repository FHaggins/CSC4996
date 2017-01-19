<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD','senior');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','ToDo_App');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
    die('Could not connect to MySQL:'.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
    die('Could not use'. DB_NAME . ': '. mysql_error());
}

echo'Connected';

$value = $_POST['listitem'];

$sql = "INSERT INTO items (listitem) VALUES ('$value')";

if (!mysql_query($sql)){
   die('Error:'. mysql_error());
}

mysql_close();

?>
