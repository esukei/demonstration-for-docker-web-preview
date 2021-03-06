<!doctype html>
<html lang="ja-JP">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demonstration</title>
  <link rel="stylesheet" href="/style/style.css">
</head>
<body>
  <header>
    <?php include('./include/global-nav.php'); ?>
  </header>
  <main>
    <section>
      <h1>Demonstration</h1>
      <p>Hi, this is demonstration HOME.</p>
      <h2>Tables in my DB.</h2>
      <p>
        <?php
          $pdo = new PDO('mysql:host=db;dbname=mydata;charset=utf8mb4', 'myuser', 'password');
          $statement = $pdo->query('SHOW TABLES');

          foreach($statement as $row) {
              echo $row[0] . '<br>';
          }
        ?>
      </p>
    </section>
  </main>
</body>
</html>
