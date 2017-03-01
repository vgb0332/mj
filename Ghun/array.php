<?php
	$topic1 = array('title'=>'HTML','description'=>'HTML은 웹페이지를 만드는 언어입니다.');
	$topic2 = array('title'=>'CSS','description'=>'CSS는 디자인을 담당합니다.');
	$topic3 = array('title'=>'JS','description'=>'자바스크립트는 제어를 담당합니다.');
	
	$topics = array($topic1,$topic2,$topic3);
	echo $topics[0]['title'];
?>
<html>
	<body>
		<ul>
			<?php
			for($i=0;$i<count($topics);$i++)
			{
				?>
				<li>
					<a href="array.php?id=<?=$i?>"><?=$topics[$i]['title']?></a>
				</li>
				<?php
			}
			?>
		</ul>
		<?php
		$id=$_GET['id'];
		echo $topics[$id]['description'];
		?>
	</body>
</html>
