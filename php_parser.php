<?php // @codeCoverageIgnoreStart

function load_all_phps($dir)
{
    $to_load = [];
    foreach (scandir($dir) as $cnt)
    {
	if ($cnt[0] == "." || $cnt == "tests")
	    continue ;
	if (is_dir($cnt))
	    return (array_merge($to_load, load_all_phps("$dir/$cnt")));
	if ($dir != __DIR__ && pathinfo($cnt, PATHINFO_EXTENSION) == "php")
	    $to_load[] = "$dir/$cnt";
    }
    return ($to_load);
}

foreach (load_all_phps(__DIR__) as $to_load)
    require_once ($to_load);

