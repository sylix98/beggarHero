<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷調查</title>
    <link rel="stylesheet" type="text/css" href="questionare1.css">
    <link rel="stylesheet" type="text/css" href="Navigation bar2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
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
    
  
    <!-- 主要內容 -->
    <div class="main-content">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="content col-md-10">
                    <div class="title"> 
                        <p class="main-title">填寫您的個人資料</p>
                        <p class="subtitle">讓我們更了解你!</p>
                    </div>
                    <form class="form row" action="questioncheck.php" method="POST">    
                        <!--Q1-->
                        <div class="q-title col-12">
                            <span class="front">Q1</span><span class="back">/7</span>
                            <p>請輸入您今年的歲數</p>
                        </div>
                        <div class="from-group col-10">
                            <label class="label">您的回答</label>
                            <input type="text" class="form-control" name="age">
                        </div>


                        <div class="hr col-5"></div>

                        <!--Q2-->
                        <div class="q-title col-12">
                            <span class="front">Q2</span><span class="back">/7</span>
                            <p>請問您的生理性別是?</p>
                        </div>
                        <div class="ratio-group col-12">
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="sexual" id="male" value="男生">
                                <label class="bt male" for="male"><span class="tag">A</span><span class="cc">男生</span></label>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="sexual" id="female" value="女生">
                                <label class="bt female" for="female"><span class="tag">B</span><span class="cc">女生</span></label>
                            </div>
                        </div>


                        <div class="hr col-5"></div>

                        <!--Q3-->
                        <div class="q-title col-12">
                            <span class="front">Q3</span><span class="back">/7</span>
                            <p>請問您的年齡位於哪一個區間？</p>
                        </div>
                        <div class="from-group col-8">
                            <label class="label">身高 (cm)</label>
                            <input type="text" class="form-control" name="height">
                        </div>
                        <div class="from-group col-8">
                            <label class="label">體重 (kg)</label>
                            <input type="text" class="form-control" name="weight">
                        </div>


                        <div class="hr col-5"></div>


                        <!--Q4-->
                        <div class="q-title col-12">
                            <span class="front">Q4</span><span class="back">/7</span>
                            <p>通常您的飲食選擇是...</p>
                        </div>
                        <div class="slider-title">
                            <span>酸</span>
                        </div>
                        <div class="slider-container">
                            <div class="slider-labels">
                                <div class="slider-label" id="label1">1</div>
                                <div class="slider-label" id="label2">2</div>
                                <div class="slider-label" id="label3">3</div>
                                <div class="slider-label" id="label4">4</div>
                                <div class="slider-label" id="label5">5</div>
                            </div>
                            <input type="range" min="1" max="5" value="3" class="slider" id="myRange" name="sour">
                        </div>
                        
                        <div class="slider-title">
                            <span>甜</span>
                        </div>
                        <div class="slider-container">
                            <div class="slider-labels">
                                <div class="slider-label" id="label1">1</div>
                                <div class="slider-label" id="label2">2</div>
                                <div class="slider-label" id="label3">3</div>
                                <div class="slider-label" id="label4">4</div>
                                <div class="slider-label" id="label5">5</div>
                            </div>
                            <input type="range" min="1" max="5" value="3" class="slider" id="myRange" name="sweet">
                        </div>

                        <div class="slider-title">
                            <span>苦</span>
                        </div>
                        <div class="slider-container">
                            <div class="slider-labels">
                                <div class="slider-label" id="label1">1</div>
                                <div class="slider-label" id="label2">2</div>
                                <div class="slider-label" id="label3">3</div>
                                <div class="slider-label" id="label4">4</div>
                                <div class="slider-label" id="label5">5</div>
                            </div>
                            <input type="range" min="1" max="5" value="3" class="slider" id="myRange" name="bitter">
                        </div>

                        <div class="slider-title">
                            <span>辣</span>
                        </div>
                        <div class="slider-container">
                            <div class="slider-labels">
                                <div class="slider-label" id="label1">1</div>
                                <div class="slider-label" id="label2">2</div>
                                <div class="slider-label" id="label3">3</div>
                                <div class="slider-label" id="label4">4</div>
                                <div class="slider-label" id="label5">5</div>
                            </div>
                            <input type="range" min="1" max="5" value="3" class="slider" id="myRange" name="spicy">
                        </div>
                    
                        <div class="slider-title">
                            <span>鹹</span>
                        </div>
                        <div class="slider-container">
                            <div class="slider-labels">
                                <div class="slider-label" id="label1">1</div>
                                <div class="slider-label" id="label2">2</div>
                                <div class="slider-label" id="label3">3</div>
                                <div class="slider-label" id="label4">4</div>
                                <div class="slider-label" id="label5">5</div>
                            </div>
                            <input type="range" min="1" max="5" value="3" class="slider" id="myRange" name="salty">
                        </div>

                        <div class="hr col-5"></div>

                        <!--Q5-->
                        <div class="q-title col-12">
                            <span class="front">Q5</span><span class="back">/7</span>
                            <p>依照你的親身經驗，請加入你喜愛和討厭的美食！</p>
                        </div>
                        
                        <div class="select-group col-12">
                            <div class="select col-6">
                                <div class="select-btn">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="btn-text">選擇你喜歡的美食（複選）</span>
                                </div>
                        
                                <div class="select-content">
                                    <div class="select-option">
                                        <ul class="options">
                                            <li data-value="a1">鐵觀音黑岩泡芙</li>
                                            <li data-value="a2">烤蔬菜番茄筆尖麵</li>
                                            <li data-value="a3">三重起司貝果</li>
                                            <li data-value="a4">乳製品</li>
                                            <li data-value="a5">打拋風植蔬餐盒</li>
                                        </ul>
                                        <select class="form-select" name="favorate[]" multiple>
                                            <option value="a1">鐵觀音黑岩泡芙</option>
                                            <option value="a2">蔬菜番茄筆尖麵</option>
                                            <option value="a3">三重起司貝果</option>
                                            <option value="a4">日式豬排佐咖哩歐姆蛋燴飯</option>
                                            <option value="a5">打拋風植蔬餐盒</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="select col-6">
                                <div class="select-btn">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="btn-text">選擇你討厭的美食（複選）</span>
                                </div>
                        
                                <div class="select-content">
                                    <div class="select-option">
                                        <ul class="options">
                                            <li data-value="b1">鐵觀音黑岩泡芙</li>
                                            <li data-value="b2">烤蔬菜番茄筆尖麵</li>
                                            <li data-value="b3">三重起司貝果</li>
                                            <li data-value="b4">日式豬排佐咖哩歐姆蛋燴飯</li>
                                            <li data-value="b5">打拋風植蔬餐盒</li>
                                        </ul>
                                        <select class="form-select" name="dislike[]" multiple>
                                            <option value="b1">鐵觀音黑岩泡芙</option>
                                            <option value="b2">蔬菜番茄筆尖麵</option>
                                            <option value="b3">三重起司貝果</option>
                                            <option value="b4">日式豬排佐咖哩歐姆蛋燴飯</option>
                                            <option value="b5">打拋風植蔬餐盒</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr col-5"></div>


                        <!--Q6-->
                        <div class="q-title col-12">
                            <span class="front">Q6</span><span class="back">/7</span>
                            <p>你有不能吃的食物嗎？</p>
                        </div>
                        <div class="select-group6 col-12">
                            <div class="select col-6">
                                <div class="select-btn">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="btn-text">選擇你不能吃的食物</span>
                                </div>
                        
                                <div class="select-content">
                                    <div class="select-option">
                                        <ul class="options">
                                            <li data-value="c1">沒有</li>
                                            <li data-value="c2">堅果(如:花生、杏仁等)</li>
                                            <li data-value="c3">海鮮(如:蝦、蟹、貝類)</li>
                                            <li data-value="c4">乳製品</li>
                                            <li data-value="c5">麩質(如:小麥、大麥等)</li>
                                            <li data-value="c6">蛋</li>
                                            <li data-value="c7">大豆</li>
                                            <li data-value="c8">其他過敏源(請具體說明)</li>
                                        </ul>
                                        <select class="form-select" name="favorate[]" multiple>
                                            <option value="c1">沒有</option>
                                            <option value="c2">堅果(如:花生、杏仁等)</option>
                                            <option value="c3">海鮮(如:蝦、蟹、貝類)</option>
                                            <option value="c4">乳製品</option>
                                            <option value="c5">麩質(如:小麥、大麥等)</option>
                                            <option value="c6">蛋</option>
                                            <option value="c7">大豆</option>
                                            <option value="c8">其他過敏源(請具體說明)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="hr col-5"></div>

                        <!--Q7-->
                        <div class="q-title col-12">
                            <span class="front">Q7</span><span class="back">/7</span>
                            <p>您在超商的消費習慣通常是...</p>
                        </div>
                        <div class="ratio-line-7 col-12">
                            <div class="ratio-title">
                                <span>打折才買</span>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="flavor1" id="c1" value="1">
                                <label class="bt c1" for="c1"></label>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="flavor1" id="c2" value="2">
                                <label class="bt c2" for="c2"></label>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="flavor1" id="c3" value="3">
                                <label class="bt c3" for="c3"></label>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="flavor1" id="c4" value="4">
                                <label class="bt c4" for="c4"></label>
                            </div>
                            <div class="ratio-option">
                                <input type="radio" class="ratio" name="flavor1" id="c5" value="5">
                                <label class="bt c5" for="c5"></label>
                            </div>
                            <div class="ratio-title">
                                <span>想買就買</span>
                            </div>
                        </div>

                        <!--一些按鈕-->
                        <div class="control-group col-8">
                            <button class="submit" type="submit">提交</button>
                            
                            <button class="reset" type="reset">重填</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 頁尾 -->
    <footer class="text-center py-3">
        <p>&copy; 2024 超商美食+ All Rights Reserved</p>
    </footer>
    

    <!-- 脚本 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="questionare.js"></script>
</body>
</html>
