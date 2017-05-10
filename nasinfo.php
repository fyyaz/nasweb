<?php
$disks = array("/", "/media/NASHDD1/");

foreach ($disks as $disk) {

	$str = "";
	$df = disk_free_space($disk);

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
	echo "$disk: $df $str left\n";
}
?>
