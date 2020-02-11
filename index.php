<?php

require_once ("config.php");

$pedro = new usuario ();

$pedro ->loadById(19);

echo $pedro;


?>