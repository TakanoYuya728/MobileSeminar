<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        class Human{
            public $name;
            public $height;
            public $weight;
            function show(){
                echo "<tr><td>$this->name</td><td>$this->height</td><td>$this->weight</td><tr>";
            }
        }
        session_start();
        $man = new Human();
        $man->name = htmlspecialchars($_POST['name']);
        $man->height = htmlspecialchars($_POST['height']);
        $man->weight = htmlspecialchars($_POST['weight']);
        $_SESSION[$man->name] = $man;
        ?>
        
        <table border="1">
            <tr><th>名前</th><th>真超</th><th>体汁</th></tr>
            <?php
                foreach ( $_SESSION as $s ){
                    $s->show();
                } 
            ?>
        </table>
        <a href="newhtml.html">戻る</a>
        
    </body>
</html>
