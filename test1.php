<?php
$content=$_POST['content'];
$user=$_POST['user'];

if($content==''){
  die("留言內容不能為空");
}