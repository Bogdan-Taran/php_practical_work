<?php

function square($x): float|int
{
    return $x*$x;
}
function cube($x): float|int
{
    return $x*$x*$x;
}
function isEven($num): bool
{
    if($num % 2 === 0){
        return true;
    } else {
        return false;
    }
}
