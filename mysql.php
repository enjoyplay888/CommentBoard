<?php
// 預先定義數據庫連接參數
$host='127.0.0.1';
$user='root';
$pwd='root';
$dbname='php10';

// 連接到數據庫
$db=new mysqli($host,$user,$pwd,$dbname);
// mysqli是系統提供的一個類

// 檢查是否成功
if($db->connect_errno!==0){
  echo "連接失敗，";
  echo $db->connect_error;
  exit;
}

// 編寫sql
// $sql="INSERT INTO msg (content,user,intime) VALUE ('aaaa','bbbb','1234567')";
$sql="select * from msg where id>12 order by id desc";

// 執行sql
$mysqli_result=$db->query($sql);  // query方法是系統提供，所以$db對象可直接調用query方法

if($mysqli_result===false){
  echo 'SQL錯誤';
  exit;
}


// var_dump($row);
// 首次調用顯示最新的一條記錄
// 重複調用，一次顯示後面的記錄
// 如果沒有記錄可以顯示，返回null
$rows=[];
while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
  $rows[]=$row;
}
var_dump($rows);

/*
// 判斷執行是否成功
if($is==true){
  echo "插入成功";
}else{
  echo "插入失敗";
}
*/