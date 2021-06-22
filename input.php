<?php
class input{
  function post($info){
  if($info ==''){
  return false;
  }
  // 禁止使用的用戶名
  $n=['張三','李四','王五'];
  foreach($n as $name){
    if($info==$name){
      return false;
    }
  }
  return true;
  }
}