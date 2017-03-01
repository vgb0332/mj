<?php
	$client = array('HTML','CSS','JavaScript');
	
	exit;
	$server = array('Apache','PHP','MySQL');
	for($i=0;$i<3;$i++)
	{
		echo $client[$i].'<br />';
		echo $server[$i].'<br />';	
	}
	echo count($client);
	echo count($server);
?>