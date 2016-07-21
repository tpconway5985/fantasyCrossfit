<?php

$j = 0;

$teams = array();

$teams[0] = array('name'=>'Blood, Sweat, and Beer');
$teams[1] = array('name'=>'Weiner Weiner Hotdog Deiner');
$teams[2] = array('name'=>'Max Reppers');
$teams[3] = array('name'=>'Kipping It Real');
$teams[4] = array('name'=>'Castro\'s Glorious Mullet');
$teams[5] = array('name'=>'Tall Glass of (Khan) Porter');
$teams[6] = array('name'=>'The Bruisers');
$teams[7] = array('name'=>'D2THAJ');
$teams[8] = array('name'=>'Call Me Doctor, Doooctor Lieberman');
$teams[9] = array('name'=>'Embargo-Proof');
$teams[10] = array('name'=>'ChestTouchesBar');
$teams[11] = array('name'=>'Thunder from Down Under');
$teams[12] = array('name'=>'The Alchemist');
$teams[13] = array('name'=>'Too Tall for a Crossfitter');
$teams[14] = array('name'=>'Small, But Mighty');
$teams[15] = array('name'=>'More of a Thor\'s Daughter than Thorisdottir');
$teams[16] = array('name'=>'Team Tom');
$teams[17] = array('name'=>'Yvette\'s CF Minions');
$teams[18] = array('name'=>'eL Dave\'s Castro');
$teams[19] = array('name'=>'BroRep');

echo '<h1>2016 Crossfit Games Fantasy Tournament Draft Order</h1><p>&nbsp;</p>';

for ($j; $j < 20; $j++) {
		$randKey = array_rand($teams,1);
        echo ($j+1).'. '.$teams[$randKey]['name'].'<br />';
        unset($teams[$randKey]);
	}

?>