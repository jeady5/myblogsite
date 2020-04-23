<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/zhncc_menu_bottom.css">
<link rel="stylesheet" type="text/css" href="css/zhncc_tutorial.css">
<title>详细安装教程</title>
</head>

<body onload='show()' background='images/butterfly.gif'>
<?php
header("Content-type:text/html;charset=utf-8");
$virtual_xp = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=100000153&idx=1&sn=77466885c4132a6379c5e6570ee15e92&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
$ps2020 = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=100001009&idx=1&sn=bae77a10ba6acf5a3ce77cb71d08187b&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
$Altium = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=2247484735&idx=1&sn=40a03e6cb7ce4d0536f0384d06fc0bc0&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
?>

<p class="title">欢迎光临，小编要做全网最详细的教程网站，望您多多支持！！！</p>
	<div class="menu">
		<ul class="ul1">
			<li class="li1"><a href="index.php">首页</a></li>
			<li class="li1" style="background-color:blue;color:white;"><a>安装教程</a>
				<ul class="ul2">
					<li class="li2"><a target="_blank" href="<?php echo $ps2020?>">ps2020破解版</a></li>
					<li class="li2"><a target="_blank" href="<?php echo $virtual_xp;?>">虚拟机及系统安装</a></li>
					<li class="li2"><a target="_blank" href="<?php echo $Altium;?>">altium
							designer 20</a></li>
					<li class="li2"><a href="tutorial.php">其他</a></li>
				</ul></li>
			<li class="li1"><a
				style="color: #996600; text-decoration: line-through;">软件目录</a>
				<ul class="ul2">
					<li class="li2"><a>1</a></li>
					<li class="li2"><a>2</a></li>
				</ul></li>
			<li class="li1"><a href="liuyanban.php">留言板</a></li>
			<li class="li1"><a href="thissite.php">此网站</a></li>
		</ul>
	</div>
<?php
$servername = "localhost";
$username = "ftpdawn";
$password = "aa224488";
$dbname = "ftpdawn";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败：" . $conn->connect_error);
}
// $conn->query("set names gb2312");
$sql = "select id,url,name from ftpdawn";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ;
    ?>
<br>
	<br>
	<table border="1" class="list">
		<tr>
			<th>id</th>
			<th>文章链接</th>
		</tr>
<?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
			<td>
        		<?php echo $row["id"];?>
    		</td>
			<td><a target="_blank" href="<?php  echo $row['url']?>"><?php echo $row["name"]?></a></td>
		</tr>
    <?php
    }
    ;
    ?>
    </table>
	<?php
} else {
    echo "0 result";
}
$conn->close();
?>
            <p>end</p>


	<div>
		<p align="center">
			<a href="information.html" target="_blank"> 关于站主 </a> <span>|</span> <a>
				jeady_wu@163.com </a> <span>|</span> <a id='run_time'> 已运行:0天 </a>
		</p>
	</div>
	<div>
		<p align="center">Copyright &#169;2020 zhncc.cn All Rights Reserved.</p>
		<p align="center">
			<img src="./beian.png" />
			<a href="http://beian.miit.gov.cn" target="_blank">鲁ICP备20012006号</a>
		</p>
	</div>
	<script type="text/javascript">
var xmlHttp;
var url="run_time.php";
function createXMLHttpRequest(){
 if(window.ActiveXObject){
  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 else if(window.XMLHttpRequest){
  xmlHttp = new XMLHttpRequest();
 }
}
function show(){
 createXMLHttpRequest();
 xmlHttp.open("GET",url,true);
 xmlHttp.onreadystatechange = callback;
 xmlHttp.send(null);
}
function callback(){
 if(xmlHttp.readyState == 4){
  if(xmlHttp.status == 200){
   document.getElementById("run_time").innerHTML = xmlHttp.responseText;
   setTimeout("show()",1000);
  }
 }
}
</script>
</body>
