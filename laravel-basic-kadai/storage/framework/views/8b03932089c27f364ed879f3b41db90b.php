<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>投稿作成</h1>
  <?php if($errors -> any()): ?>
    <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
  <form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
      <table>
        <tr>
          <th>タイトル </th>
          <td><input type="text" name="title"></td>
        </tr>
        <tr>
          <th>　本文　 </th>
          <td><textarea rows="7" cols="22" name="content" ></textarea></td>
        </tr>
      </table>
      <input type="submit" value="投稿" >
  </form>
</body>
</html><?php /**PATH C:\work\pj2025-shinohara\xampp\htdocs\laravel-basic-kadai\resources\views/posts/create.blade.php ENDPATH**/ ?>