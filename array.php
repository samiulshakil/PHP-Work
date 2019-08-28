<?php
	$name = array('sayma','shuvo','shanto','shakil','siddique','samiul');
	echo $name[3];
	
	
	$marks = Array('Chemistry'=>88,'Physics'=>44,'Math'=>99,'English'=>90,'Bangla'=>66);

	echo $marks['Math'];
	
	
	$father = array(
	'shakil'=>array('age'=>20,'marks'=>99,'hobby'=>'playing cricket'),
	
	'shanto'=>array('age'=>33,'sub'=>array('eng'=>33,'phy'=>87,'ban'=>44)),
	
	);
	
	echo($father)['shanto']['sub']['phy'];
	
	
?>



