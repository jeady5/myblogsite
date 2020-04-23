<html>
    <head>
    	<title>留言版</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<link rel="stylesheet" type="text/css" href="css/zhncc_message.css">
    	<meta http-equiv="Refresh" content="3;url=http://zhncc.cn/message.php" />
    </head>
    <body>
    	<?php 
        	header("Content-type:text/html;charset=utf-8");
        	$email = $_POST['email'];
        	$nickname = $_POST['nickname'];
        	$content = $_POST['message'];
//         	echo $email."<p>".$nickname."<p>".$content;
        	$mysql_host = "127.0.0.1";
        	$mysql_user = "ftpdawn";
        	$mysql_password = "aa224488";
        	$mysql_db = "ftpdawn";
        	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
        	if($conn->connect_error){
        	    echo "连接失败";
        	    die('connect fail'.mysqli_connect_error());
        	}
        	$sql = "insert into zhncc_liuyan (nickname,email,message) values ('".$nickname."','".$email."','".$content."');";
        	$result = $conn->query($sql);
        	if($result==1){
        	    echo "<script type='text/javascript'>alert('留言成功');</script>";
        	    echo "3s后自动返回<br>";
        	    echo "<a href='message.php'>立即返回</a>";
        	}
        	$conn->close();
    	?>
    </body>
</html>