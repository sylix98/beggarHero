<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美食_Page</title>
    <link rel="stylesheet" href="../assets/Navigation bar.css">
    <link rel="stylesheet" href="Food Info Obj.css">
    <link rel="stylesheet" href="Review Comment Obj4.css">
    <link rel="stylesheet" href="Comment Btn.css">

</head>
<style>
.comment-divider {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin: 50px 0; /* 加上適當的間距 */
}

.comment-divider span {
    font-size: 64px;
    border: 0;
    margin: 0;
}

.comment-divider hr {
    width: 1200px;
    border: 0;
    border-top: 1px solid #352f36;
    margin: 24px auto;
}

</style>
<body>
    <!-- 導覽列 -->
    
    <nav class="navBar">
        <div class="bergerMenu-placeholder">
            <img class="bergerMenu" src="../assets/NavBar_image/menu.png">
            <div class="sidebar-placeholder">
            <?php

            if(!isset($_SESSION["check"])){
                $_SESSION["check"] = "No";
                $_SESSION["Name"] = " ";
            }
            $uId = $_SESSION['Name'];
            if($_SESSION["check"] == "Yes"){
                    //以登入部分顯示
            ?>
                <div class="sidebar">
                    <div class="header">個人設定</div>
                    <div class="profile">
                        <img class="profile-icon" src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : '../assets/SB_image/userPhoto.jpg'; ?>" alt="User Icon" />
                        <div class="user-id"><?php echo $uId;?></div>
                    </div>
                    <div class="menu">
                        <?php
                        if($_SESSION["access"] == "admin"){
                        ?>
                        <div class="menu-item">  
                            <img class="icon" src="../assets/SB_image/trash.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../刪除功能/delete_page.php">
                                    去刪除使用者
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">  
                            <img class="icon" src="../assets/SB_image/analysis.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../分析頁面/analysis.php">
                                    查看分析報告
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="menu-item">  
                            <img class="icon" src="../assets/SB_image/settings.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../編輯個人檔案/edit_profile.php">
                                    編輯個人檔案
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="../assets/SB_image/bookmark.png" alt="Favorites Icon" />
                            <div class="menu-text">
                                <a href="../我的蒐藏/collections.php">
                                    查看我的收藏
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="../assets/SB_image/bell.png" alt="Notifications Icon" />
                            <div class="menu-text">
                                <a href="../通知/notification.php">
                                    啟用乞丐通知 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }else{
                //未登入部份顯示 
            ?>
                <div class="sidebar">
                    <div class="header">個人設定</div>
                    <div class="profile">
                        <div class="profile">
                            <img class="profile-icon" src="../assets/SB_image/userPhoto.jpg" alt="User Icon" />
                            <div class="user-id">User_ID</div>
                        </div>
                        <div class="user-id">
                            <a href="../登入登出/login.php">您還未登入！</a>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="menu-item">
                            <img class="icon" src="../assets/SB_image/settings.png" alt="Edit Profile Icon" />
                            <div class="menu-text">編輯個人檔案</div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="../assets/SB_image/bookmark.png" alt="Favorites Icon" />
                            <div class="menu-text">查看我的收藏</div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="../assets/SB_image/bell.png" alt="Notifications Icon" />
                            <div class="menu-text">啟用乞丐通知</div>
                        </div>
                    </div>
                </div>
            <?php
            }
            
            ?>
                
            </div>
        </div>

        <div class="logo-placeholder">
            <a href="../搜尋功能/index.php">
                <img class="logo" src="../assets/NavBar_image/logo.png">
            </a>
        </div>

        <?php
        if(!isset($_SESSION["check"])){
            $_SESSION["check"] = "No";
        }
            
        if($_SESSION["check"] == "Yes"){
               //以登入部分顯示
        
        ?>
        <div class="User-placeholder">
            <div class="hello-text">
                <div><?php echo $uId . " "; ?>您好</div>
            </div>
            <div class="photo-placeholder">
                <img class="user-photo" src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : './SB_image/userPhoto.jpg'; ?>">
                <div class="hover-windows-placeholder">
                    <div class="hover-windows">
                        <div class="windows-placeholder">
                            <div class="setting">
                                <img class="setting-icon" src="../assets/NavBar_Logged_image/setting.svg" />
                                <div class="setting-text"><a href="../編輯個人檔案/edit_profile.php">個人設定</a></div>
                            </div>
                            <div class="windows-line"></div>
                            <div class="log-out">
                                <img class="log-out-icon" src="../assets/NavBar_Logged_image/log-out.svg" />
                                <div class="log-out-text"><a href="../登出/logout.php">登出</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }else{
                //未登入部份顯示 

        ?>
        <div class="button-placeholder">
            <a class="logIn-btn" href="../登入登出/login.php">登入</a>
            <a class="signUp-btn" href="../登入登出/register.php">註冊</a>
        </div>
        <?php
        }
        ?>
    </nav>

    <?php

    // 接收 GET 参数
    $foodImage = isset($_GET['foodImage']) ? $_GET['foodImage'] : '';
    $foodName = isset($_GET['foodName']) ? $_GET['foodName'] : '';
    $storeLogo = isset($_GET['storeLogo']) ? $_GET['storeLogo'] : '';
    $satietyAvg = isset($_GET['satietyAvg']) ? $_GET['satietyAvg'] : '';
    $preferAvg = isset($_GET['preferAvg']) ? $_GET['preferAvg'] : '';
    $priceAvg = isset($_GET['priceAvg']) ? $_GET['priceAvg'] : '';
    $foodPrice = isset($_GET['foodPrice']) ? $_GET['foodPrice'] : '';
    ?>

    <!-- 評價連結按鈕 -->
    <div class="comment-btn-container">
        <button id="comment-btn">
            <a href="../使用者評價頁面/user_comment.php?foodName=<?php echo $_SESSION['foodName']; ?>">我要評價</a>
        </button>
    </div>

    <!-- 美食資訊物件 -->
    <div class="FIO">
        <?php
        function createFoodItem($foodImage, $foodName, $foodPrice, $storeLogo, $satietyAvg, $preferAvg, $priceAvg)
        {
            return "
            <div class='FIO_Container'>
                <div class='food-image-box'>
                    <div class='food-image'>
                        <img src='{$foodImage}' alt='Food image'>
                    </div>
                    <div class='food-image'>
                        <img src='{$foodImage}' alt='Food image'>
                    </div>
                </div>
                <div class='info-interface'>
                    <div class='food-name'>{$foodName}</div>
                    <div class='price'>
                        <span>$</span><span>{$foodPrice}</span>
                        <span class='original-price'>\${$foodPrice}</span>
                    </div>
                    <div class='source-info'>
                        <div>來自</div>
                        <div class='logo-container'>
                            <img class='food-logo' src='{$storeLogo}' alt='Food Logo'>
                        </div>
                        <div class='source-line'></div>
                        <img src='./FIO_image/collection.png' alt='圖標'>
                        <img src='./FIO_image/source.png' alt='連結圖標'>
                    </div>
                    <div class='review-container'>
                        <div class='review-item'>
                            <img src='./FIO_image/SatietyrReview.svg' alt='review 1'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$satietyAvg}</div>
                        </div>
                        <div class='review-item'>
                            <img src='./FIO_image/PreferReview.svg' alt='review 2'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$preferAvg}</div>
                        </div>
                        <div class='review-item'>
                            <img src='./FIO_image/PriceRevier.svg' alt='review 3'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$priceAvg}</div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }


        ?>
        <div class="food-list">
            <?php
            echo createFoodItem($foodImage, $foodName, $foodPrice, $storeLogo, $satietyAvg, $preferAvg, $priceAvg);
            ?>
        </div>
    </div>
    </div>

    <!-- 評價留言 -->

    <?php
    // 資料庫連接參數
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalproject";

    // 建立連接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 假設從 search-output.php 接收到的食物名稱
    $foodName = $_SESSION['foodName']; // 例如從 URL 參數接收

    // 查詢評論和使用者資訊
    $sql = "SELECT r.reviewTime, r.reviewText, r.satietyReview, r.preferReview, r.priceReview, r.likeCount, r.dislike,
        GROUP_CONCAT(rp.photoPath SEPARATOR ',') AS uploadedPhotos, u.uName, u.uPhoto
        FROM review r
        JOIN users u ON r.uEmail = u.uEmail
        LEFT JOIN review_photos rp ON r.uEmail = rp.uEmail AND r.foodName = rp.foodName AND r.reviewTime = rp.reviewTime
        WHERE r.foodName = ?
        GROUP BY r.uEmail, r.foodName, r.reviewTime";

    // 準備和綁定參數
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $foodName);

    // 執行查詢
    $stmt->execute();
    $result = $stmt->get_result();

    // 準備儲存結果的陣列
    $reviewComments = [];

    // 遍歷查詢結果並儲存至陣列
    while ($row = $result->fetch_assoc()) {
        // 將 uploadedPhotos 轉換為陣列
        $uploadedPhotosArray = $row['uploadedPhotos'] ? explode(',', $row['uploadedPhotos']) : [];

        $reviewComments[] = [
            'userPhoto' => $row['uPhoto'],
            'userName' => $row['uName'],
            'reviewTime' => $row['reviewTime'],
            'reviewText' => $row['reviewText'],
            'satietyScore' => $row['satietyReview'],
            'preferenceScore' => $row['preferReview'],
            'priceScore' => $row['priceReview'],
            'likeCount' => $row['likeCount'],
            'dislikeCount' => $row['dislike'],
            'uploadedPhotos' => $uploadedPhotosArray
        ];
    }

    // 關閉連接
    $stmt->close();
    $conn->close();

    // timeAgo function
    function timeAgo($datetime)
    {
        $now = new DateTime();
        $interval = $now->diff(new DateTime($datetime));
        if ($interval->y > 0) {
            return $interval->y . '年以前';
        } elseif ($interval->m > 0) {
            return $interval->m . '個月以前';
        } elseif ($interval->d > 0) {
            return $interval->d . '天以前';
        } elseif ($interval->h > 0) {
            return $interval->h . '小時以前';
        } else {
            return $interval->i . '分鐘以前';
        }
    }
    ?>
    <div class="comment-divider">
        <span>評價</span>
        <hr>
    </div>
    <div class="center">
        <div id="uComment-container">
            <?php foreach ($reviewComments as $comment) : ?>
                <div class="userComment-container">
                    <!-- 留言 -->
                    <div class="comment-content">
                        <div class="user-info">
                            <div class="user-comment-placeholder">
                                <img class="user-comment-photo" src="<?= $comment['userPhoto'] ?>" alt="User Photo" />
                            </div>
                            <div class="user-details">
                                <div class="username"><?= $comment['userName'] ?></div>
                                <div class="time-info">
                                    <img class="clock-icon" src="./RCO_Image/clock.svg" alt="Clock Icon" />
                                    <span><?= timeAgo($comment['reviewTime']) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-text">
                            <?= $comment['reviewText'] ?>
                        </div>
                        <div class="comment-info">
                            <div class="comment-container">
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/SatietyrReview.png" alt="Satiety Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['satietyScore'] ?></div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/PreferReview.png" alt="Preference Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['preferenceScore'] ?></div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/PriceReview.png" alt="Price Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['priceScore'] ?></div>
                                </div>
                            </div>
                            <div class="likes-container">
                                <div class="likes-dislikes">
                                    <div class="like-item">
                                        <img class="like-icon" src="./RCO_image/upvote.svg" alt="Like Icon" />
                                        <div class="comment-line"></div>
                                        <div class="comment-score"><?= $comment['likeCount'] ?></div>
                                    </div>
                                    <div class="dislike-item">
                                        <img class="dislike-icon" src="./RCO_image/downvote.svg" alt="Dislike Icon" />
                                        <div class="comment-line"></div>
                                        <div class="comment-score"><?= $comment['dislikeCount'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 留言圖片 -->
                    <div class="comment-image">
                        <?php if (count($comment['uploadedPhotos']) > 0) : ?>
                            <div class="overlay">
                                <img src="<?= $comment['uploadedPhotos'][1] ?>" alt="Uploaded Photo" style="width: 100%; height: 100%;">
                            </div>
                            <div class="image-placeholder">
                                <img src="<?= $comment['uploadedPhotos'][0] ?>" alt="Uploaded Photo" style="width: 100%; height: 100%;" onclick="openModal(0, <?= json_encode($comment['uploadedPhotos']) ?>)">
                            </div>
                            <div class="image-count">
                                <img class="icon" src="./RCO_image/image.svg" alt="Image Icon" />
                                <span><?= count($comment['uploadedPhotos']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- 圖片瀏覽器 -->
        </div>
    </div>



    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
        <div class="navigation">
            <button id="prev" class="nav-button">◀</button>
            <button id="next" class="nav-button">▶</button>
        </div>
    </div>
    <script src="Review Comment Obj.js"></script>
</body>

</html>