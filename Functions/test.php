<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>

<body>
     <form method="post" action="test.php">
          <select name="taskOption">
               <option value="first">First</option>
               <option value="second">Second</option>
               <option value="third">Third</option>
          </select>
          <input type="submit" value="Submit" />
     </form>
     <?php
   $option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   if ($option) {
      echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     
   }
   ?>
</body>

</html>