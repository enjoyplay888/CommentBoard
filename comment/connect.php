<?php
// 預先定義數據庫連接參數
$host='127.0.0.1';
$dbuser='root';
$pwd='root';
$dbname='php10';

// 連接到數據庫
$db=new mysqli($host,$dbuser,$pwd,$dbname);

// 檢查是否成功
if($db->connect_errno!==0){
  die("連接數據庫失敗");
  echo $db->connect_error;
}

/*
如果有亂碼時，設定數據庫數據傳輸編碼
數據庫本身的字符集是自動，所以要改成UTF8
$db->query("SET NAMES UTF8");
*/