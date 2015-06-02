<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link rel="stylesheet" type="text/css" href="newCascadeStyleSheet.css">
       
        
    </head>
    <body>
     <form method="post" action="index.php">
        <textarea type="text" name="toukou" rows="10" cols="40"  ></textarea>>
        <input type="submit" value="送信">
    </form>
    <hr>
    <?php
    $ichiran = file_get_contents('counter.txt');
    if (@$_POST['toukou']) {
      $ichiran = htmlspecialchars($_POST['toukou']) . "<hr>$ichiran";
      file_put_contents('counter.txt', $ichiran);
    }
    echo nl2br($ichiran);
    ?>

    </body>
</html>
