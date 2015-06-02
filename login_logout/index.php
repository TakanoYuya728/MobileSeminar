<?php 
    session_start();
    $page = @$_GET['p'];
    $flag = false;
    if(!$page) $page = 'top';
   if (!preg_match('/^[a-z]{1,8}$/', $page)) exit();
    if(!isset($_SESSION['name'])) {
        $page = 'login';
        if(isset($_POST['id'])){
            if($_POST['id'] == 'takano' && $_POST['pw'] == 'takano'){
                $_SESSION['name'] = '高野';
                $page = 'top';
                $flag = false;
            }
            else {
                 $flag = true;
            }
        }
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ポンク1</title>
        <style>
        h1 {
          margin: 0;
        }
        #header, #footer {
          background-color: #fed;
          height: 60px;
          padding: 10px;
        }
        #main {
          background-color: #eee;
          padding: 10px;
        }
        </style>
    </head>
    <body>
        <div id="header">
            <h1>サイトへようこそ</h1>
        </div>
        <div id='main'>
         <?php
            require "$page.php";
         ?>
        </div>
        <div id='footer' >
            <a href="?p=top">トップページ</a> |
            <a href="?p=time">秘密の時間</a> |
            <a href="?p=home">秘密の部屋</a> |
            <a href="?p=logout">ログアウト</a> |           
        </div>
            
    </body>
</html>
