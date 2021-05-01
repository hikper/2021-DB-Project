<?php

$dbservername = "localhost";
//xampp local host
$dbusername = "root";
//database user name xampp
$dbpassword = "";
//default inside password
$dbname = "db";

$connect = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno($connect)) 
{ 
    echo "連接MySQL失敗。 " . mysqli_connect_error(); 
} 
// $dsn='sqlite:C:\Users\User\my_db\p2.db';   //給定資料庫位置

// try{
//  $db=new PDO($dsn);       //建立資料庫連線
//  $cont = '連線成功!<br />';  //連線成功顯示

//  $dsn=null;
// } catch(PDOException $e){  //若連線有問題，結果顯示
//     $cont = ''.$e->getMessage();
//     $dsn=null;
// }

