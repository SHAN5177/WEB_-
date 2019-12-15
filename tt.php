<html>
<head>
<meta charset="utf-8">
</head>

<body>
<title>完成訂單</title>
    
您好! <?php echo $_GET["firstname"]; ?>
我們已收到您的訂單<br>
您的EMAIL: <?php echo $_GET["email"]; ?><br>

地址:<?php echo $_GET["address"]; ?><br>

<p>謝謝您的惠顧</p>

    <input type="submit" value="點擊回到本店首頁" onclick="location.href='index.html' "class="btn">
<br>


</body>
</html>