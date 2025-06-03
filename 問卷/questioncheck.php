<?php
session_start(); // 啟動會話

if (!isset($_SESSION['email'])) {
    echo "尚未登入!";
    header("Refresh:3; url=login.html");
    exit();
}

$link = @mysqli_connect('localhost', 'root', '', 'finalproject');

if (!$link) {
    die("無法開啟資料庫!<br/>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uEmail = $_SESSION['email'];
    $uAge = $_POST["age"];
    $uGender = $_POST["sexual"];
    $uHeight = $_POST["height"];
    $uWeight = $_POST["weight"];
    $sourPrefer = $_POST["sour"];
    $sweetPrefer = $_POST["sweet"];
    $bitterPrefer = $_POST["bitter"];
    $spicyPrefer = $_POST["spicy"];
    $saltyPrefer = $_POST["salty"];
    $dietaryPrefer = $_POST["flavor1"];

    // 檢查是否存在 'favorate', 'dislike' 和 'prohibit' 鍵
    $likeFoods = isset($_POST["favorate"]) ? $_POST["favorate"] : [];
    $dislikeFoods = isset($_POST["dislike"]) ? $_POST["dislike"] : [];
    $prohibitFood = isset($_POST["prohibit"]) ? $_POST["prohibit"] : [];

    // 分別映射選項值到食物名稱
    $likeFoodMap = [
        "a1" => "鐵觀音黑岩泡芙",
        "a2" => "烤蔬菜番茄筆尖面",
        "a3" => "三重起司貝果",
        "a4" => "日式豬排佐咖哩歐姆蛋燴飯",
        "a5" => "打拋風植蔬餐盒"
    ];

    $dislikeFoodMap = [
        "b1" => "鐵觀音黑岩泡芙",
        "b2" => "烤蔬菜番茄筆尖面",
        "b3" => "三重起司貝果",
        "b4" => "日式豬排佐咖哩歐姆蛋燴飯",
        "b5" => "打拋風植蔬餐盒"
    ];

    $prohibitFoodMap = [
        "c1" => "鐵觀音黑岩泡芙",
        "c2" => "烤蔬菜番茄筆尖面",
        "c3" => "三重起司貝果",
        "c4" => "日式豬排佐咖哩歐姆蛋燴飯",
        "c5" => "打拋風植蔬餐盒"
    ];

    // 將選項值轉換為食物名稱
    foreach ($likeFoods as &$food) {
        $food = $likeFoodMap[$food] ?? $food;
    }
    foreach ($dislikeFoods as &$food) {
        $food = $dislikeFoodMap[$food] ?? $food;
    }
    foreach ($prohibitFood as &$food) {
        $food = $prohibitFoodMap[$food] ?? $food;
    }

    // 儲存年齡、身高和體重
    $sql = "UPDATE users SET uAge=?, uGender=?, uHeight=?, uWeight=? WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "isiis", $uAge, $uGender, $uHeight, $uWeight, $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 儲存口味偏好
    $sql = "UPDATE user_dietary SET sourPrefer=?, sweetPrefer=?, bitterPrefer=?, spicyPrefer=?, saltyPrefer=? WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "iiiiss", $sourPrefer, $sweetPrefer, $bitterPrefer, $spicyPrefer, $saltyPrefer, $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 儲存飲食偏好
    $sql = "UPDATE users_consump SET userConsump=? WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "is", $dietaryPrefer, $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 定义一个函数来检查 foodName 是否存在于 food 表中
    function food_exists($link, $foodName) {
        $sql = "SELECT COUNT(*) FROM food WHERE foodName = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "s", $foodName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
        return $count > 0;
    }

    // 清除舊的喜歡的食物記錄
    $sql = "DELETE FROM user_like_food WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 插入新的喜歡的食物記錄
    $sql = "INSERT INTO user_like_food (uEmail, foodName) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $sql);
    foreach ($likeFoods as $food) {
        if (food_exists($link, $food)) {
            mysqli_stmt_bind_param($stmt, "ss", $uEmail, $food);
            mysqli_stmt_execute($stmt);
        }
    }
    mysqli_stmt_close($stmt);

    // 清除舊的討厭的食物記錄
    $sql = "DELETE FROM user_dislike_food WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 插入新的討厭的食物記錄
    $sql = "INSERT INTO user_dislike_food (uEmail, foodName) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $sql);
    foreach ($dislikeFoods as $food) {
        if (food_exists($link, $food)) {
            mysqli_stmt_bind_param($stmt, "ss", $uEmail, $food);
            mysqli_stmt_execute($stmt);
        }
    }
    mysqli_stmt_close($stmt);

    // 清除舊的不能吃的食物記錄
    $sql = "DELETE FROM user_prefer WHERE uEmail=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // 插入新的不能吃的食物記錄
    $sql = "INSERT INTO user_prefer (uEmail, prohibitFood) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $sql);
    foreach ($prohibitFood as $food) {
        if (food_exists($link, $food)) {
            mysqli_stmt_bind_param($stmt, "ss", $uEmail, $food);
            mysqli_stmt_execute($stmt);
        }
    }
    mysqli_stmt_close($stmt);

    mysqli_close($link);

    // 提交後重定向到一個感謝頁面或首頁
    echo "<script>alert('註冊成功'); window.location.href='../搜尋功能/index.php';</script>";
}
