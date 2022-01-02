<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
  <!-- emptyメソッドは中身が空かどうか確かめる -->
  <?php if (!empty($_REQUEST['my_name'])): ?>
    <!-- htmlspecialcharsは不正なプログラムが書き込まれないようにするために使用する -->
    <p>お名前:<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES) ?></p>
  <?php endif; ?>
</body>
</html>