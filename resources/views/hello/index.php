<html>

<head>
  <title>Hello/Index/Template</title>
  <style>
    body {
      font-size: 16pt;
      color: #999;
    }

    h1 {
      font-size: 100pt;
      text-align: right;
      color: #999;
      margin: -40px 0px -50px 0px;
    }
  </style>
</head>

<body>
  <h1>Index</h1>
  <p><?php echo $msg; ?></p>
  <p><?php echo $msg2; ?></p>
  <p><?php echo date('Y年n月j日'); ?></p>
  <p>ID=<?php echo $id; ?></p>
</body>

</html>