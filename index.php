<!DOCTYPE html>
<html>
 <head>
  <title>To Do Application for CSC 4996/7</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

 </head>
 <body>
  <div class="List">
   <h1 class="header"> To do's</h1>
	<ul class="items">
           
           <li><span class="item">Finish Project</span> </li>
           <li><span class="item finished">Start Project</span><a href="#" class="finished-button">Task is finished</a></li>
        </ul>

       <form action="http://localhost/todo_app/adding.php" method="post"> 
         <input type="text" name="listitem" placeholder="Type your task here" class="input" required>
         <button name="Submit"  value="Add"> 
         <span>Add</span>
         </button>
	 <button name="action" value="delete">
         <span>Delete</span>
         </button>
	 <button name="action" value="finished-button">
         <span>Strike</span>
         </button>
       </form>
  </div>
<?php require("connect.php"); ?>
 <body>
<html>
