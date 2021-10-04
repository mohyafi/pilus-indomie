<?php

require('IndomieHelpers.php');

class Index {
    function getDay(){
        echo hariIndo("MONDAY");
    }
    function getMonth(){
        echo tglIndo(date('Y-m-d'), 'LONG');
    }
}

$index = new Index();
$index->getMonth();