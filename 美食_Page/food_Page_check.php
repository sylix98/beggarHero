<?php
session_start();

// 连接数据库
$link = @mysqli_connect('localhost', 'root', '', 'finalproject');
if (!$link) {
    die("無法開啟資料庫!<br />");
}

// 接收传递的 foodName 参数
if (isset($_GET['foodName'])) {
    $foodName = mysqli_real_escape_string($link, $_GET['foodName']);
    $_SESSION['foodName'] = $foodName; // 将 foodName 存储到 SESSION 中
} else {
    $foodName = isset($_SESSION['foodName']) ? $_SESSION['foodName'] : '';
}

if ($foodName) {
    // 查询食品详细信息
    $query = "
    SELECT f.foodImage, f.foodName, f.storeLogo, f.foodPrice, fas.satietyAvg, fas.preferAvg, fas.priceAvg
    FROM food f
    JOIN food_avgscore fas ON f.foodName = fas.foodName
    WHERE f.foodName = '$foodName'
    ";
    $result = mysqli_query($link, $query);
    $foodItem = mysqli_fetch_assoc($result);

    // 关闭数据库连接
    mysqli_close($link);

    if ($foodItem) {
        // 将食品信息传递到第二项程式以进行展示
        header("Location: food_Page.php?" . http_build_query($foodItem));
        exit();
    } else {
        echo "找不到相应的食物信息";
    }
} else {
    echo "未提供食物名称";
}
?>

