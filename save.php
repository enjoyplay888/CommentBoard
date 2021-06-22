<?php
include('input.php');
include('connect.php');
$content=$_POST['content'];
$user=$_POST['user'];

$input=new input();

// 調用函數檢查留言內容
$is=$input->post($content);
if($is==false){
  die('留言內容不正確');
}

// 調用函數檢查留言人
$is=$input->post($user);
if($is==false){
  die('留言人不正確');
}
// var_dump($content,$user);

$time=time();
$sql="INSERT INTO msg (content,user,intime) VALUE ('{$content}','{$user}','{$time}')";
$is=$db->query($sql);
// var_dump($is);
header("location:gbook.php"); // 當代碼執行到這裡的時候自動跳到gbook.php