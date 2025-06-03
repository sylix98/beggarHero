<meta charset='utf8'>
<?php
header('Content-Type: text/plain; charset=utf-8');
$deletedUser = $_GET["uEmail"];

$link = @mysqli_connect('localhost', 'root', '', 'finalproject');

// SQL 語法
$sql = "DELETE FROM users WHERE uEmail='$deletedUser'";

// 送出查詢
$result = mysqli_query($link, $sql);

// 確認是否成功刪除資料
if ($result) {
    echo "success";
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($link);
}

// 關閉資料庫連接
mysqli_close($link);
?>
