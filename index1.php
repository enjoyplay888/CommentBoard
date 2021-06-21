<?php
// 使用foreach遍歷如下數組
$a3=['a'=>5,'b'=>1.2,5=>true,3=>'abc'];
foreach($a3 as $value){
  echo "<br>$value";
}

// 再加上下標變量$key
foreach($a3 as $key=>$value){
  echo "<br>$key : $value";
}