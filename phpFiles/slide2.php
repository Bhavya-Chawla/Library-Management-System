<?php
//function to return sum of rwo numbers;
$f=23;
$c=checkprime($f);
echo $c;
function checkprime($a)
{
	$b=0;
	for($i=1;$i<=$a;$a++)
	{
		if($a%$i==0)
		{
			$b++;
		}
	}
	if($b>2)
		return true;
	else
		return false;
}
?>