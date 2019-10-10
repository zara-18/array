<!DOCTYPE html>
<html>
<body>

<?php
function Num($abc=array(),$rep){
	$ab=array_slice($abc,$rep);
	//var_dump($abc);
	//var_dump($ab);
    $a=array_diff($abc,$ab);
    //$c=array_merge($ab,$a);
    echo implode(array_merge($ab,$a));
}

Num(array(1,2,3,4,5),2);
?>

</body>
</html>