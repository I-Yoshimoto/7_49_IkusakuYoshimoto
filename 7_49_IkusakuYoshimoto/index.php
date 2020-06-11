<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登山記録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style> -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
      <legend class="index_heading">▲ 山行記録</legend>
      <p class="sub_heading">〜登った山をメモしよう〜</p>
      <div class="form_wrapper">
          <div class="form_left">
              <label>登頂日：<input type="date" name="date"></label><br>
              <label>山名：<input type="text" name="mountain_name"></label><br>
          </div>
          <img class="index_img" src="img/index_img.JPG" alt="">
      </div>
              <label>コメント： <textarea name="comment" rows="4" cols="40"></textarea></label><br>
              <label>山小屋HP：<input type="text" name="website_url" class="mountain_hut"></label><br>
              <input type="submit" value="登録する" class="register">
    </fieldset>
  </div>
</form>


<div class="container-fluid">
      <div class="navbar-header">
          <a class="list_button" href="select.php">登録一覧</a>
      </div>
</div>
<!-- Main[End] -->


<!-- jqueryが先 -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- script.jsを読み込む -->
<script src='js/script.js'></script>


</body>
</html>
