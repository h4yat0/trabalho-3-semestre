<?php

$xamp = true;

/*
    prod.php  => xamp
    local.php => QA | localhost
*/


$file = $xamp ? 'xamp.php' : 'phpN.php';


require_once('env/' . $file);