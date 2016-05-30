<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <?php
      session_start();
      if(!isset($_SESSION['id'])) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
      }
      $ID = $_SESSION['id'];
      echo "<p>안녕하세요. " . $ID . "님</p>";
      echo "<p><button onclick=\"location.href='logout.php'\">로그아웃</a></p>";
    ?>
  </body>
</html>
