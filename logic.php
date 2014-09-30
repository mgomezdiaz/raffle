<?php
$contestans ['Nick']='Loser';
$contestans ['Pat']='Loser';
$contestans ['Jeremy']='Loser';
$contestans ['Johanna']='Loser';
$contestans ['Diana']='Loser';
$contestans ['Kate']='Loser';

$count=0;
$random = rand(0, count($contestans)-1);

foreach ($contestans as $key => $value) {
	if ($count == $random) {
		$contestans[$key]='Winner';
		break;
	}
	$count++;
}