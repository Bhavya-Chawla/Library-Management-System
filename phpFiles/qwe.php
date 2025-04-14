<?php
$capitals=array();
$capitals["India"]="Delhi";
$capitals["China"]="Beijing";
$capitals["France"]="Paris";
foreach($capitals as $keyname=>$keyvalue)
{
	echo "Key name="." ".$keyname." "."Key value is="."  ".$keyvalue;
	echo "<br>";
}
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
function checkprime($a)
{
	$b=0;
	for($i=1;$i<=$a;$i++)
	{
		if($a%$i==0)
		{
			$b++;
		}
	}
	if($b==2)
		return 0;
}
$s=0;
for($j=1;$j<=10;$j++)
{
	$k=checkprime($j);
	{
		if($k==0)
		{
			$s=$s+$j;
		}
}

}
echo $s;
?>