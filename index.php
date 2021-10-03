<?php

require('IndomieHelpers.php');

class Index {
    function getDay(){
        echo hariIndo("MONDAY");
    }
}

$index = new Index();
$index->getDay();