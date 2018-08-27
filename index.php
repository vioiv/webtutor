<?php
  $conn = mysqli_connnect('localhost','root','111111');
  mysqli_select_db($conn, "opentutorials");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
</head>
<body>
    <header>
        <h1><a href="http://localhost:8080/">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
          <?php echo file_get_contents("list.txt") ?>
        </ol>
    </nav>
    <div id="control">

    </div>
    <article>
      <?php
      if(empty($_GET['id']) === false){
         echo file_get_contents($_GET['id'].".txt");
      }
      ?>
    </article>
</body>
</html>
