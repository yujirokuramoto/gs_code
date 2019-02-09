<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>div{padding: 10px;font-size:16px;}</style>
    <title>Log in</title>
</head>
<body>
    
    <header>
    <nav class="navbar navbar-default">LOGIN</nav>
    <nav class="navbar navbar-default">
    <a class="navbar-brand" href="us.select.practice.php">[ VISITOR ]</a></nav>
</header>
    </header>
<!-- login_act.phpは認証処理用のPHPです。 -->
<form name="form1" action="login_act2.practice.php" method="post">
ID: <input type="text" name="lid" />
PW: <input type="password" name="lpw"/>
<input type="submit" value="LOGIN" />
</form>


</body>
</html>