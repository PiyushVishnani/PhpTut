<?php
function reverseDigits($num)
{
	$rev = 0;
	while ($num > 0)
	{
		$rev = $rev * 10 + $num % 10;
		$num = (int) $num / 10;
	}
	return $rev;
}
function square($num) 
{
	return ($num * $num);
}
function checkAdamNumber($num)
{
	$a = square($num);
	$b = square(reverseDigits($num));
	
	if ($a == reverseDigits($b))
	return 0;
	return -1;
}

$num = 12;

if (checkAdamNumber($num))
echo "Adam Number";
else
echo "Not a Adam Number";
?>
