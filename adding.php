<?php
require "http://localhost/todo_app/mysqli_connect.php"

if(isset($_POST['listitem'])){
 $listitem = trim($_POST['listitem']);

if(!empty($listitem)) {
      $addedQuery = $db->prepare("INSERT INTO items(listitem) VALUES (:listitem)");


      $addedQuery->execute(['$listitem']);

}
   }
header('Location: index.php');




?>
