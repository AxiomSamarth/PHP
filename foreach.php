<?php

$food = array('Healthy'=>array('Salad','Vegetables','Pasata'),

			  'Unhealthy'=>array('Pizza','PopCorn','IceCream'));

foreach ($food as $key => $value) {
	echo '<strong>'.$key.'</strong><br />';

	foreach($value as $item)
	{
		echo $item.'<br />';
	}
}

?>