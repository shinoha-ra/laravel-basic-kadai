<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><b>ID</b>　<?php echo e($posts -> id); ?></p>
  <p><b>タイトル</b>　<?php echo e($posts -> title); ?></p>
  <p><b>本文</b>　<?php echo e($posts -> content); ?></p>
  <p><b>作成日時</b>　<?php echo e($posts -> created_at); ?></p>
  <p><b>更新日時</b>　<?php echo e($posts -> updated_at); ?></p>
</body>
</html><?php /**PATH C:\work\pj2025-shinohara\xampp\htdocs\laravel-basic-kadai\resources\views/posts/show.blade.php ENDPATH**/ ?>