<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>User register</title>
  <link rel="stylesheet" href="css/php.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.practice.php">[ User Management ]</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.practice.php">
  <div class="jumbotron">
   <fieldset>
    <legend>User</legend>
     <label>Name：<input type="text" name="name"></label><br>
     <label>lid : <input type="text" name="lid"></label><br>
     <label>lpw :<input type="password" name="lpw"></label><br>
     <input type="submit" value="Submit!">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>