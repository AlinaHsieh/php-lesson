<h1>目標頁面</h1>
<?php
// echo $_GET['addr'];
// echo $_POST['name'];
// echo $_post['type'];
// echo $_POST['img'];

if(!empty($_GET)){
    echo "以下資料為GET表單的資料<br>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
if(!empty($_POST)){
    echo "以下資料為POST表單的資料<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>