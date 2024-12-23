<?php

$strArr = array("1, 3, 4, 7, 13", "1, 2, 4, 13, 15");

$strArr = implode(
    ',',
    array_intersect(
        explode(', ', $strArr[0]),
        explode(', ', $strArr[1])
    )

);

// code goes here
echo $strArr;