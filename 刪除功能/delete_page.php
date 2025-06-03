<?php
session_start();
//  查詢功能

//連接資料庫
$link = @mysqli_connect('localhost', 'root', '', 'finalproject');

//判斷資料庫是否連接成功
if (!$link) {
    die("無法連接資料庫!<br/>");
} else {
}

//sql語法
$sql = "SELECT * FROM users";

//送出查詢
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>刪除頁面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/Navigation bar.css">
    <link rel="stylesheet" type="text/css" href="delete_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 3px solid #FFC619;
    
        }


        th, td {
            text-align: left;
            padding: 8px;
            color: #352f36;
            border: 2px solid white;
        }

        th {
            background-color: #FFC619;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: #F2F2F2;
        }

        tr:hover {
            background-color: #F2DBDC;
        }
        
        .link{
            color: #BC4B51;
            text-decoration: none;
        }

        .link:visited, :link, :active {
            color: #BC4B51;
            text-decoration: none;
        }
    
    </style>
</head>
<body>
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
                <img class="user-photo" src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : '../assets/SB_image/userPhoto.jpg'; ?>">
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="main-content">
                    <div class="title">
                        <span>刪除使用者</span>
                    </div>
                    <table>
                        <tr>
                            <th>暱稱</th>
                            <th>電子郵件</th>
                            <th>操作</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row["uName"]."</td>";
                            echo "<td>".$row["uEmail"]."</td>";
                            echo "<td><a class='link' href='#' onclick='deleteUser(\"".$row["uEmail"]."\")'>刪除</a></td>"; // 刪除按鈕
                            echo "</tr>";
                        }

                        mysqli_close($link); // 關閉資料庫連接，釋放資源
                        ?>
                    </table> 
                    
                        
                </div>
            </div>
        </div>
     </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script>
        function deleteUser(email) {
            if (confirm("確定要刪除這個使用者嗎？")) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "delete_func.php?uEmail=" + email, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        console.log("Status: " + xhr.status);
                        console.log("Response: " + xhr.responseText);
                        location.reload(); // 刷新頁面以更新表格
                    }
                }
                xhr.send();
            }
        }
    </script>
</body>
</html>
