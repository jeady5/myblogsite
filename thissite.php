<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/zhncc_menu_bottom.css">
<link rel="stylesheet" type="text/css" href="css/zhncc_thissite.css">
<title>孤舟远游，不忘初心</title>
</head>
<body onload='show()' background='images/butterfly.gif'>
<?php
header("Content-type:text/html;charset=utf-8");
$virtual_xp = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=100000153&idx=1&sn=77466885c4132a6379c5e6570ee15e92&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
$ps2020 = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=100001009&idx=1&sn=bae77a10ba6acf5a3ce77cb71d08187b&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
$Altium = "https://mp.weixin.qq.com/s?__biz=MzU2ODQ2NTMzNQ==&mid=2247484735&idx=1&sn=40a03e6cb7ce4d0536f0384d06fc0bc0&scene=19&token=1609456636&lang=zh_CN#wechat_redirect";
$php_4_20_1 = <<<php
&lt;div class="menu"&gt;
&lt;ul class="ul1"&gt;

&lt;li class="li1"&gt;&lt;a&gt;menu1&lt;/a&gt;
&lt;ul class="ul2"&gt;
&lt;li class="li2"&gt;&lt;a&gt;submenu1&lt;/a&gt;&lt;/li&gt;
&lt;li class="li2"&gt;&lt;a&gt;submenu2&lt;/a&gt;&lt;/li&gt;
&lt;li class="li2"&gt;&lt;a&gt;submenu3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;

&lt;li class="li1"&gt;&lt;a&gt;menu2&lt;/a&gt;
&lt;ul class="ul2"&gt;
&lt;li class="li2"&gt;&lt;a&gt;1&lt;/a&gt;&lt;/li&gt;
&lt;li class="li2"&gt;&lt;a&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;

&lt;/ul&gt;
&lt;/div&gt;
php;
$css_4_20_1 = <<<css
@charset "UTF-8";
.ol1{
	width: 80%;
	margin: 0 auto;
	text-align: left;
}
ul{
	padding: 0px;
}
.ul1 > li{
	list-style:none;
	float: right;
	margin-top: 1%;
	margin-left: 2%;
	margin-right:2%;
	width: 16%;
}
.ul2 > li{
	list-style:none;
	float: none;
	margin: 0px;
	width: 200px;
	text-align:center;
	border:1px dotted black;
}
.ul2{
	display: none;
	position: absolute;
}
.li1 > a{
	text-decoration: none;
	font-size: 20px;
}
.li2 > a{
	text-decoration: none;
	display:block;
}
.li1:hover{
	color:blue;
	text-align: center;
}
.li2:hover{
	background-color: #996600;
}
.li1:hover .ul2{
	display: block;
}

li:hover li{
	color: #333366;	
}
css;
?>
<p class="title">欢迎光临，小编要做全网最详细的教程网站，望您多多支持！！！</p>
	<div class="menu">
		<ul class="ul1">
			<li class="li1"><a href="index.php">首页</a></li>
			<li class="li1"><a>安装教程</a>
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
			<li class="li1" style="background-color: blue;"><a
				style="color: white;" href="thissite.php">此网站</a></li>
		</ul>
	</div>
	<div class="content">
		<!-- 插入需要的代码 -->
		<h4>
			<i>本站源码已上传至github：<a href="https://github.com/jeady5/myBlogSite"
				target="_blank">github地址</a></i>
		</h4>
		<strong><i>只为学习使用，请大佬们手下留情！！！</i></strong>
	</div>
	<div class='content'>零基础建本站，边学边建站，一起学习吧！</div>
	<!-- 	动态显示运行时间 -->
	<div class="content">
		<div class="list">
			<h1>2020年4月16日</h1>
			<p>完成网站的大致部署</p>
			<p>难点：在网页底部动态显示运行时间</p>
			<h3>1、test.php</h3>
			<h5>
				代码实现了<i>页面运行时加载显示函数</i>、<i>显示标签</i>、<i>页内脚本</i>
			</h5>
			<div class="code">
				&lt;html&gt;<br> &lt;head&gt;&lt;/head&gt;<br> &lt;body
				onload="show()"&gt;<br> &lt;div id="run_time"&gt;&lt;/div&gt;<br>
				&lt;script type="text/javascript"&gt;<br> var xmlHttp;<br> var
				url="run_time.php";<br> function createXMLHttpRequest(){<br>
				if(window.ActiveXObject){<br> xmlHttp = new
				ActiveXObject("Microsoft.XMLHTTP");<br> }<br> else
				if(window.XMLHttpRequest){<br> xmlHttp = new XMLHttpRequest();<br> }<br>
				}<br> function show(){<br> createXMLHttpRequest();<br>
				xmlHttp.open("GET",url,true);<br> xmlHttp.onreadystatechange =
				callback;<br> xmlHttp.send(null);<br> }<br> function callback(){<br>
				if(xmlHttp.readyState == 4){<br> if(xmlHttp.status == 200){<br>
				document.getElementById("run_time").innerHTML =
				xmlHttp.responseText;<br> setTimeout("show()",1000);<br> }<br> }<br>
				} &lt;/script&gt;<br> &lt;/body&gt;<br> &lt;/html&gt;
			</div>
			<h3>2、run_time.php</h3>
			<div class='code'>
				&lt;?php //将运行至今的描述转换为天、时、分、秒
				$seconds=date('U')-strtotime('2020-4-12 0:0:0');<br>

				$cont_time['day']=strval(intval(intval($seconds)/60/60/24)).'天';<br>
				$cont_time['hour']=strval(intval($seconds)/60/60%24).'时';<br>
				$cont_time['min']=strval(intval(intval($seconds)/60%60)).'分';<br>
				$cont_time['second']=strval(intval(intval($seconds)%60)).'秒';<br>

				echo
				$cont_time['day'].$cont_time['hour'].$cont_time['min'].$cont_time['second'];<br>

				?&gt;
			</div>
		</div>
	</div>
	<!-- 	菜单显示 -->
	<div class="content">
		<div class="list">
			.
			<h1>2020年4月20日</h1>
			<p>完成导航菜单的制作</p>
			<p>制作中的难点，将菜单居中，及用ul制作下拉菜单</p>
			<h2>一、实现下拉菜单</h2>
			<div class="left_php">
				<h3>test.php</h3>
				<div class="code">
					<pre>
<?php echo $php_4_20_1;?></pre>
				</div>
			</div>
			<div class="right_css">
				<h3>test.css</h3>
				<div class="code">
					<pre>
<?php echo $css_4_20_1;?></pre>
				</div>
			</div>
			<h2>二、实现div居中</h2>
			<div class="left_php">
				<h3>test.php</h3>
				<div class="code">
					<pre>
&lt;div class="menu"&gt;&lt;/div&gt;
		</pre>
				</div>
			</div>
			<div class="right_css">
				<h3>test.css</h3>
				<div class="code">
					<pre>
.menu{
	width: 80%;
	margin: 0 auto;
}
		</pre>
				</div>
			</div>
			<h2>三、点击li就是点击a标签</h2>
			<p>问题描述：a标签没有填充整个li标签</p>
			<div class="left_php">
				<div class="code">&lt;ul class='ul1'&gt;<br>
&lt;li&gt;&lt;a href=''&gt;test1&lt;/a&gt;&lt;/li&gt; <br>&lt;br&gt;<br>
&lt;li&gt;&lt;a href=''&gt;test2&lt;/a&gt;&lt;/li&gt; <br>&lt;/ul&gt;<br>
</div>
			</div>
			<div class="right_css">
			<div class="code">
				    .ul1>li{<br>
       width:300px;<br>
    }<br>
    li>a{<br>
        display: block;<br>
    }<br>
			</div>
			</div>.
		</div>
	</div>
	<!-- 	并排显示div -->
	<div class="content">
		<div class="list">
			.
			<h1>2020年4月21日</h1>
			<p>完成 此网站 内容的大体制作</p>
			<p>制作中的难点，将php代码与css代码放到同一行</p>
			<div class="left_php">
				<h3>test.php</h3>
				<div class="code">
					<pre>
&lt;div class="test1"&gt;test1&lt;/div&gt; 
&lt;div class="test2"&gt;test2&lt;/div&gt;
					</pre>
				</div>

			</div>
			<div class="right_css">
				<h3>test.css</h3>
				<div class="code">
					<pre>
.test1{ 
	width: 49%;
	float: left; 
	background:red;
} 
.test2{ 
	width: 49%; 
	float:left; 
	margin-left:1%; 
	background:blue;
}

			</pre>
				</div>
			</div>.
		</div>
	</div>
	<!-- 连接数据库、读取及插入 -->
	<div class='content'>
		<div class='list'>
			<h1>2020年4月22日</h1>
			<p>完成留言板板块</p>
			<p>难点 插入数据库</p>
			<h2>一、连接数据库</h2>
			<div class='code'>
				$host = 'localhost';<br> $username = 'test_name';<br> $userpassword
				= 'test_pwd';<br> $dbname = 'test_db';<br> $conn = new
				mysqli($host,$username,$userpassword,$dbname);<br>
				if($conn->connect_error){<br> die('connect error'.mysqli_error);<br>
				}else echo "success";<br> $conn->close();
			</div>
			<h2>二、读取数据库</h2>
			<div class=code>
				$sql = "select * from test_table";<br> $result = $conn.query($sql);<br>
				while($row = $result->fetch_assoc()){<br> echo $row['id'];<br> }<br>
			</div>
			<h2>三、插入数据</h2>
			<p>在此处我遇到了大麻烦，实现这个功能浪废了很长时间</p>
			<p>插入sql语句中值两边的单引号必须加上，否则不能实现插入;如果表中全是数字可以自己尝试不加应该也可以。</p>
			<p>insert into test_table (name,age) values ('小明','21');
			
			
			<div class='code'>
				$name = '小明';<br> $age = '21';<br> $sql = "insert into test_table
				(name,age) values ('".$name."','".$age."')";<br> $result =
				$conn->qury($sql);<br> if($result==1){<br> echo 'success';<br> }<br>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="list">未完待续......</div>
	</div>




	<p>end</p>
	<div>
		<p align="center">
			<a href="information.html" target="_blank"> 关于站主 </a> <span>|</span>
			<a> jeady_wu@163.com </a> <span>|</span> <a id='run_time'> 已运行:0天 </a>
		</p>
	</div>
	<div>
		<p align="center">Copyright &#169;2020 zhncc.cn All Rights Reserved.</p>
		<p align="center">
			<img src="./beian.png" /> <a href="http://beian.miit.gov.cn"
				target="_blank">鲁ICP备20012006号</a>
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