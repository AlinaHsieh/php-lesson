<?php
$height=$_GET['height'];
$weight=$_GET['weight'];

echo "您輸入的身高為：" . $height . "公分<br>";
echo "您輸入的體重為：" . $weight . "公斤<br>";

$bmi=round($weight/(($height/100)*($height/100)),2);
$level="";

if($bmi>=27){
    $level="肥胖";
}else if($bmi>=24){
    $level="體重過重";
}else if($bmi>=18.5){
    $level="正常";
}else{
    $level="體重過輕";
}
echo "您的BMI為：";
echo "您的體位判定為：". $level;