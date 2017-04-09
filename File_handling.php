<?php

$file = fopen('Samarth.txt',w);

fwrite($file, 'Samarth Deyagond is the most intelligent coder on this existing earth');

/*The file will be written freshly every time and if multiple fwrite is used then
it is going to append and we can concatenate the sentences with . connectors*/

fclose($file);

/* This is the responsibilty of the coder to close the file that is opened 
which can only be done on ethical basis*/

?>