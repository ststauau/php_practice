<?php

// PHP/Laravel04

$subject1 = 200;
$answer1 = func_numDouble($subject1);
echo "課題1=".$answer1."\n";

$subject2_a = 5;
$subject2_b = 10;
$answer2 = func_numAdd($subject2_a,$subject2_b);
echo "課題2=".$answer2."\n";

$suject3_arr = array(1,3,5,7,9);
$answer3 = func_arrMulti($suject3_arr);
echo "課題3=".$answer3."\n";


$arr = array(100,110,200,1001,2500,600,3500);
$answer4 = max_array($arr);
echo "課題4=".$answer4."\n";


$answer5 = func_assort();
echo "課題5=\n".$answer5."\n";



//課題1
function func_numDouble($num){
    
    $num *=2;

    return $num;
    
}


//課題2
function func_numAdd($a,$b){
    
    $num = 0;
    
    $num = $a + $b;

    return $num;
    
}


//課題3
function func_arrMulti($arr){

    $max = count($arr);
    
    $num = $arr[0];
    
    for($i=0;$i<$max;$i++){
        
        $num = $num*$arr[$i];
        
    }
    
    return $num;


}


//課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 
    if($max_number < $a){
        
        $max_number = $a;
        
    }
 
     
 }

 return $max_number;
}


//課題5
// strip_tags
// array_push
// array_merge
// time, mktime
// date

function func_assort(){
    
    // strip_tags
    $str1 = "<p>これは課題用のHTML</p>実際のコードは<b>もっと複雑</b>です";
    $str2 = strip_tags($str1);
    

    // array_push
    $arr1 = array(
                "ぶどう",
                "りんご",
                "ぱいなっぷる",                
                "ばなな",
                "なし"    
                );
    
    //★注意　array_pushの返り値は追加後の要素数
    array_push($arr1,"ドリアン");
    
    
// array_merge
    $arr2 = array(
                "トマト",
                "キャベツ",
                "だいこん"
                );


    $arr3 = array_merge($arr1,$arr2);


// time, mktime

    $myTimeStamp = time();
    
    $myDate = date('Y/m/d',$myTimeStamp);

    $myTimeStamp2 = mktime($myDate);


    $joined_arr1 = join("-",$arr1);    
    
    $joined_arr2 = join("-",$arr2);    
    
    $joined_arr3 = join("-",$arr3);

    
    
    $string_set=
                    "タイムスタンプ1：".$myTimeStamp."\n".
                    "日付：".$myDate."\n".
                    "日付からタイムスタンプ：".$myTimeStamp2."\n".
                    
                    $joined_arr1."\n".
                    $joined_arr2."\n".
                    $joined_arr3."\n".
                    
                    
                    $str2."\n";
                ;

    return $string_set;
}




?>