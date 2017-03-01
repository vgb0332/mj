<html>
	<head>
		<style>
			body {
			color : red;
			}
		</style>
	</head>
	<body>
		<ul>
			<li><a href="./condition.php?id=1">1a</a></li>
			<li><a href="./condition.php?id=2">2b</a></li>
			<li><a href="./condition.php?id=3">3c</a></li>
			<li></li>
		</ul>
		<?php
		if($_GET['id']==1)
		{
			echo "1a";
		}
		else if($_GET['id']==2)
		{
			echo "2b";
		}
		else
		{
			echo "3c";
		}
		?>
	</body>
</html>