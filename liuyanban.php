<!DOCTYPE HTML>
<html>
    <head>
	    <title>留言板</title>
    	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    	<link rel="stylesheet" type="text/css" href="css/zhncc_menu_bottom.css" >
 		<link rel="stylesheet" type="text/css" href="css/zhncc_message.css">
    </head>
    <body onload="show()">
    	<?php 
header("Content-type:text/html;charset=utf-8");
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
			<li class="li1" style="background-color: blue;"><a href='liuyanban.php'
				 style="color:white;">留言板</a></li>
			<li class="li1"><a href="thissite.php">此网站</a></li>
		</ul>
	</div>
<!-- 插入需要的代码 -->
<div class="liuyanqu">
    	<form class="liuyan_form" action="liuyan.php" onsubmit=" return checkForm()" method="post">
    		<p class="liuyan_tip"><i>· 要留言的消息：</i><b style="color: red">*</b><textarea class="input_liuyan" name="message"></textarea></p>
    		<p class="liuyan_tip"><i>· 留言者信息：</i><b style="color: red">*</b></p>
    		<div class="liuyan_tip1">
        		<p>留言者的昵称：<input id="nickname" class="input_name" name="nickname"></input><b style="color: red">*</b></p>		
        		<p>留言者的邮箱：<input class="input_email" name="email"></input><b style="color: red">*</b></p>
    		</div>
    		<button class="liuyan_tip2" type="submit">留言</button>

    	</form>
    	</div>
<!--     	加载全部留言 -->
    	<div class="liuyanqu">
			<?php 
			header("Content-type:text/html;charset=utf-8");
            $mysql_host = "localhost";
            $mysql_user = "ftpdawn";
            $mysql_password = "aa224488";
            $mysql_db = "ftpdawn";
            $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
            if($conn->connect_error){
                echo "连接失败";
                die('connect fail'.mysqli_connect_error());
            }
            echo "<i><strong>全部留言</strong></i>";
            $sql = "select * from zhncc_liuyan;";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {?>
                <div class='message_title'><h4><i>昵称：</i><?php echo $row['nickname']?></h4><h5><i>邮箱：</i><?php echo $row['email']?></h5>
                <hr>
                <div class='message_detail'><?php echo $row['message']?></div>
                </div><?php
            }
            $conn->close();
            ?>
    	</div>
    	
    	
     <script type="text/javascript">
		function checkForm(){
			var r=confirm("提交留言？")
			if(r == true){
    			var nickname = document.getElementsByName("nickname")[0].value;
    			var email = document.getElementsByName("email")[0].value;
    			var content = document.getElementsByName("message")[0].value;
    			if(nickname==''||email==''||content==''){
    				alert("请补充信息后重试");
    				return false;
    			}else{
    				return true;
    			}
			}else{
				return false;
			}
    	}
    </script>
    
    
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
</html>