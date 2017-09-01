<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="./css/main.css" media="screen" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="wrapper">

    <div class="header">
        <div class="topbar-center">
            <span style="color:#DF5A49;font-weight: bold">LOGIN</span>
        </div>
    </div>

    <div class="content">
        <div class="login-content">
            <form id="login_form" action="login.php" method="POST">
                <div class="login-alert" id="alert"></div>
                <div class="login-left">User Name(*)</div>
                <input class="login-input" maxlength="45" type="text" id="user_name" name="userName" placeholder="User Name" />
                <div class="login-left">Password(*)</div>
                <input id="password" maxlength="45" class="login-input" type="password" name="password" placeholder="Password"/>
                <button class="button-test" id="login" type="submit">Login</button>
            </form>

        </div>

    </div>


    <div class="footer">
        <span class="footer-title"> <i>GIGATUM</i></span>
    </div>


</div>

</body>
</html>
