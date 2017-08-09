<?php
$str = '11:30-12:30 12:00-15:00 13:00-23:00';
$times = explode(" ", $str);
$maxUsers = 0;
$maxStart = 0;
$maxEnd = 0;
foreach($times as $curTime) {
	$curStart = strtotime(explode("-", $curTime)[0]);
	$curEnd = strtotime(explode("-", $curTime)[1]);
	$curUsers = 0;
	foreach($times as $time) {
		$start = strtotime(explode("-", $time)[0]);
		$end = strtotime(explode("-", $time)[1]);
		if ($end >= $curEnd and $start < $curEnd) {
			$curUsers++;
			if ($start > $curStart) {
				$curStart = $start;
			}
		}
	}
	if ($curUsers > $maxUsers) {
		$maxUsers = $curUsers;
		$maxStart = $curStart;
		$maxEnd = $curEnd;
	}
}
echo "$maxUsers\n";
echo date('H:i',$maxStart).'-';
echo date('H:i',$maxEnd);
?>
