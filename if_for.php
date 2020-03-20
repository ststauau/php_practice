<?php
// 制御構文課題
/* IF文とForループ */


// ★自主課題　標準入力させてみる  >>
$input = "";
$input = trim(fgets(STDIN));

$name = $input;
// echo $input;

// ★自主課題　標準入力させてみる  <<


echo "■課題1 \n";
// $name = "あさの";

if($name == "あさの"){
    
    echo "私は　".$name."です！\n";
    
}else{
    
    echo "アナタの名前ではありません\n";
    
}


echo "■課題2 \n";
$num = 0;
for($i=0;$i<=10000;$i++){
    
    $num += $i;
    
}

echo "答えは".$num."です\n";


echo "■課題3 \n";
$arr_fruits = array(
                "ぶどう",
                "りんご",
                "ぱいなっぷる",                
                "ばなな",
                "なし",    
                );

foreach($arr_fruits as $fruit){

    echo $fruit."\n";
    

}


/* for文の始めの値を定義する */
$start = 1;

/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

echo "\n";
