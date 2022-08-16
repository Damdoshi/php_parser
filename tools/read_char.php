<?php

function bunny_read_char(string $str, int &$index, string $tokens):bool
{
    $start = substr($str, $index);
    for ($i = 0; $start[$i]; ++$i)
	if (strpos($tokens, $start[$i]) === false)
	    break ;
    if ($i == 0)
	return (false);
    $index += $i;
    return (true);
}

function bunny_check_char(string $str, int $index, string $tokens):bool
{
    return (bunny_read_char($str, $index, $tokens));
}

