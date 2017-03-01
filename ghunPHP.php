<html>
	<body>
		Hello World!
		1+1 <br />
		<?php
		echo "~Hello World~";
		echo 1+1;
		
		echo "<br />";
		$a = 1;
		$b = 2;
		$c = "test";
		echo $a+$b.$c;
		
		echo "<br />";
		if($a<$b)
		{
			echo "true";
		}
		else
		{
			echo "false";	
		}
		
		echo "<br />";
		
		$inputnum = $_GET['a'];
		echo $inputnum + 4;
		?>
		

		
	</body>
</html>