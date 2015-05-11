<?php
	/*
	* This script expects the webpage to pass an atomic_num when 
	* the user clicks an element on the periodic table.
	* It then gets more details about that element from the database
	* and passes them back to the calling page to be printed.
	*
	* a = array
	* i = integer
	* s = string
	* b = boolean
	*/


	include "db_config.php"; //this is required!

	$s_atomic_num = $_GET['atomic_num'];
	//$s_overlaydataquery = "select * from elements where atomic_num=".$s_atomic_num;
	$s_overlaydataquery = "SELECT * FROM elements INNER JOIN element_factsheet ON element_factsheet.atomic_num = elements.atomic_num WHERE elements.atomic_num=".$s_atomic_num;

	try{
		$rawdata = $db->query($s_overlaydataquery);
		$overlaydata = $rawdata->fetchAll(PDO::FETCH_ASSOC)[0];
	}catch(PDOException $ex){
		echo "Merlin's beard! I failed to pull element details from the database.";
	}

	$s_retval ="<div class='overlay-header'>".
		"<h2 class='name-overlay'>".$overlaydata['name']."</h2>".
		"<div class='element-quick-detail'>".
		"<div class='atomic_num-overlay'>".$overlaydata['atomic_num']."</div>".
		"<div class='symbol-overlay'>".$overlaydata['symbol']."</div>".
		"<div class='atomic_weight-overlay'>".$overlaydata['atomic_weight']."</div>".
		"</div></div>".
		"<iframe class='video' width='560' height='315' src='https://www.youtube.com/embed/".$overlaydata['video']."?autoplay=0' frameborder='0' allowfullscreen/>";
	echo $s_retval;
