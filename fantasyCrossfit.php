<?php

$menArr = array('Ben Smith', 'Rob Forte', 'Roy Gamboa', 'Josh Bridges', 'Brent Fikowski', 'Bjorgvin Karl Guomundsson', 'Mathew Fraser', 'Scott Panchik', 'James Newbury', 'Travis Williams', 'Rasmus Wisbech Andersen', 'Noah Ohlsen', 'Ben Stoneberg', 'Lukas Esslinger', 'Albert-Dominic Larouche', 'Jacob Heppner', 'Khan Porter', 'Logan Collins', 'Marcus Filly', 'Travis Mayer', 'Lucas Parker', 'Jonne Koski', 'Patrick Vellner', 'Alex Anderson', 'Zeke Grove', 'Sean Sweeney', 'Christian Lucero', 'Jacob Anderson', 'Samuel Kwant', 'Adrian Mundwiler', 'Spencer Hendel', 'Zak Carchedi', 'Mitchell Sinnamon', 'Joseph Guesnier', 'Garret Fisher', 'Gary Helmick', 'Cole Sager', 'Lukas Hogberg', 'Alex Vigneault', 'Sam Dancer');

$womenArr = array('Annie Thorisdottir', 'Samantha Briggs', 'Camille Leblanc-Bazinet', 'Katrin Tanja Davidsdottir', 'Kara Webb', 'Lauren Fisher', 'Emily Bridgers', 'Carleen Mathews', 'Ragnheiour Sara Sigmundsdottir', 'Sheila Barden', 'Tia-Clair Toomey', 'Whitney Cappellucci', 'Rebecca Voigt', 'Anna Tunnicliffe', 'Emily  Abbott', 'Carol-Ann Reason-Thibault', 'Stacie Tovar', 'Alethea Boon', 'Alexis Johnson', 'Alessandra Pichelli', 'Meg Reardon', 'Margaux Alvarez', 'Kristin Holte', 'Michele Letendre', 'Brooke Wells', 'Justine Beath', 'Tennil Reed', 'Chyna Cho', 'Christy Adkins', 'Carly Fuhrer', 'Kari Pearce', 'Jennifer Smith', 'Madeline Sturt', 'Candice Wagner', 'Jamie Hagiya', 'Alea Helmick', 'Christina Seeley', 'Thuridur Erla Helgadottir', 'Tasia Percevecz', 'Kristi Eramo');

function pickAthlete(&$team) {
	global $menArr, $womenArr, $randNums;
	
	// pick men's athlete
	$randKey = array_rand($menArr,1);
	array_push($team, $menArr[$randKey]);
	array_push($randNums, $randKey);
	unset($menArr[$randKey]);
	
	//pick women's athlete
	$randKey = array_rand($womenArr,1);
	array_push($team, $womenArr[$randKey]);
	array_push($randNums, $randKey);
	unset($womenArr[$randKey]);
}

$i = 0;
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

$randNums = array();

for ($i; $i < 2; $i++) {
	for ($j; $j < 20; $j++) {
		pickAthlete($teams[$j]);
	}
	$j = 0;
}

echo '<h1>2016 Crossfit Games Fantasy Tournament Teams</h1>';

for ($j; $j < 20; $j++) {
	echo '<h3>'.$teams[$j]['name'].'</h3>';
	echo '1. '.$teams[$j][0].'<br />';
	echo '2. '.$teams[$j][1].'<br />';
	echo '3. '.$teams[$j][2].'<br />';
	echo '4. '.$teams[$j][3].'<br /><br />';
}

//echo '<pre>'.print_r($teams, true).'</pre>';

?>