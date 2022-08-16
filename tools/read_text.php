<?php

function bunny_read_text(string $str, int &$index, string $token):bool
{
    $len = strlen($token);
    if (substr($str, $index, $len) != $token)
	return (false);
    $index += $len;
    return (true);
}

function bunny_check_text(string $str, int $index, string $token):bool
{
    return (bunny_read_text($str, $index, $token));
}

