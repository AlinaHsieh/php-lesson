<?php
$acc='1234';
$pw='1234';
// $_POST['acc'];
// $_POST['pw'];

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "帳密正確，登入成功";
}else{
    echo "帳密錯誤，登入失敗";
}
?>
<a href="login.php">回登入頁</a>