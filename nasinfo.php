<?php
$df = disk_free_space("/media/NASHDD1/");
$str = "";


if ($df < 1000)
{
	$df = $df;
	$str = "B";
}
elseif ($df <1000000)
{
	$df = $df/1000;
	$str = "KB";
}
elseif ($df < 1000000000)
{
	$df = $df/1000000;
	$str = "MB";
}
else
{
	$df = $df/1000000000;
	$str = "GB";
}

$df = round($df, 2);
echo "$df $str left";
?>
