<?php
class name{
  public $s1=0;
  public $s2=1;

  function __construct($a,$b){
    $this->s1=$a;
    $this->s2=$b;
  }
  public function s1(){
    $this->s2();
  }

  public function s2(){
    echo $this->s1;
  }
}
$name=new name('a','b');
// 這兩個實參會自動傳到構造方法
$name->s1();