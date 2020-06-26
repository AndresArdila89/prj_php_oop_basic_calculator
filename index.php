<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Calculator php OOP</title>
   </head>
   <body>
     <form class="" action="includes/cal.inc.php" method="post">
       <p>OOP Basic Calculator</p>
       <input type="number" name="num1" value="" placeholder="First Number">
       <select name="oper">
         <option value="add">Addition</option>
         <option value="sub">Substraction</option>
         <option value="div">Division</option>
         <option value="mul">Multiplication</option>
       </select>
       <input type="number" name="num2" value="" placeholder="Second Number">
       <button type="submit" name="Submit">Calculate</button>
     </form>

   </body>
 </html>
