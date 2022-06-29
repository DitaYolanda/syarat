<?php
//f(5)
$bin=5;
for($a=1; $a<=$bin;$a++){
  for($b=1; $b<=$a;$b++){
    echo"&nbsp";
  }
  for($c=$bin; $c>=$a; $c-=1){
    echo"*";
  }
  echo"<br>";
}
for($a=2; $a<=$bin; $a++){
  for($b=$bin; $b>=$a; $b-=1){
    echo "&nbsp";
  }
  for($c=1; $c<=$a; $c++){
    echo"*";
  }
  echo"<br>";
}
//f(3)
$bin=3;
for($a=1; $a<=$bin;$a++){
  for($b=1; $b<=$a;$b++){
    echo"&nbsp";
  }
  for($c=$bin; $c>=$a; $c-=1){
    echo"*";
  }
  echo"<br>";
}
for($a=2; $a<=$bin; $a++){
  for($b=$bin; $b>=$a; $b-=1){
    echo "&nbsp";
  }
  for($c=1; $c<=$a; $c++){
    echo"*";
  }
  echo"<br>";
}
?>
