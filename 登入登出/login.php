<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <link rel="stylesheet" type="text/css" href="reglog.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="left col-md-6">
                <div class="col-md-11 reglogPic">
                    <div class="pictitle mb-0">
                        <p class="maintitle">超商美食+</p>
                        <p class="subtitle">選擇困難?買完後悔?不再!</p>
                    </div>
                </div>
            </div>
            <div class="right col-md-6">
                <div class="vertical-line"></div>
                <div class="content ml-4 col-md-9">
                    <p class="maintitle mt-4">緩光臨!</p>
                    <p class="subtitle mb-4">馬上登入，否則美食要沒啦</p>
                    <form action="logincheck.php" method="post">
                        <div class="form-group">
                            <label for="email">電子郵件</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="輸入電子郵件">
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="輸入密碼">
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn col-3 mt-4">登入</button>
                            <p class="ml-3 mt-4 mb-0">
                                <a href="register.php">還沒有帳號？來註冊一個嘛 <#3 </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
