<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>黃鎰弘個人簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
		<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1text").innerText = "資管導論";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1text").innerText = "黃鎰弘";
  			document.getElementById("h2text").innerText = "Yi-Hung Huang";
		}
	</script>
</head>
<body>
	<?php echo date("Y-m-d") ?>

	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>
				<h1 id="h1text">黃鎰弘</h1>
				<h2 id="h2text">Yi-Hung Huang</h2>
			</td>
		</tr>
	</table>

	<table width="70%" border="1">	
		<tr>
			<td>
				靜宜大學資管系：<a href="https://csim.pu.edu.tw/" target="_blank">https://csim.pu.edu.tw/</a><br>
				FB：<a href="https://www.facebook.com/profile.php?id=100012546876735">https://www.facebook.com/profile.php?id=100012546876735</a><br>
				Tel:<a href="Tel:04-26328001,18110"> 04-26328001#18110</a><br>
				E-Mail:<a href="mailto:austin061910@gmail.com"> austin061910@gmail.com</a><br>
			</td>
			
			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
								<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>

			<td>
					不要去臺灣<br>
					<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				webdemo<br>
				<iframe
   					allow="microphone;"
    				width="350"
    				height="430"
    				src="https://console.dialogflow.com/api-client/demo/embedded/a987607d-b57c-4572-9707-4bb672fa7270">
				</iframe>
			</td>
		</tr>
	</table>

</body>
</html>