<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><b>ID</b>　{{$posts -> id}}</p>
  <p><b>タイトル</b>　{{$posts -> title}}</p>
  <p><b>本文</b>　{{$posts -> content}}</p>
  <p><b>作成日時</b>　{{$posts -> created_at}}</p>
  <p><b>更新日時</b>　{{$posts -> updated_at}}</p>
</body>
</html>