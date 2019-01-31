<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Book</title>
  <link rel="stylesheet" href="css/php.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.practice.php">[ Book Management ]</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.practice.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Book</legend>
     <label>Book Name：<input type="text" name="book_name"></label><br>
     <label>Book URL : <input type="text" name="book_url"></label><br>
     <label>Comments　:<textArea name="comments" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="Submit!">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>