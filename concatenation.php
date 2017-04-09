<?php

/*This is the way of commenting the multiple line of comments.
  This is a php script to concatenate the variables 
*/

// This is single line comment



$day="Thursday";
$date=17;
$year=2015;


/* While we use the $variable_name within the echo language construct we should enclose it
we should enclose our sentence within double quotes or else the $variable_name will be printed
as it is	
 */


echo "Today is $day  $date $year";

/*The way of concatenating using the single quotation marks  is as follows*/

echo '<br /><br />Today is '.$day.' '.$date.' '.$year.'.';


?>

<p>The day today is <?php echo "$day"; ?></p>