<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
    a{
      margin-top: 20px;
      display: inline-block;
      text-decoration: none;
      color: #fff;
      border:1px solid #fff;
      padding: 12px 34px;
      font-size: 20px;
      background-color: yellow;
      position: relative;
      cursor: pointer;
    }
    <style>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>
