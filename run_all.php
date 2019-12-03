<?php
//run_all.php
/*
Will attempt to run all test files in the current folder, 
inside separate iframes.

Good for a detailed view of the test files.

*/

if ($handle = opendir('.')) {
	$str = '';
    while (false !== ($entry = readdir($handle))) {

		//to be run, the file name must include .php and "test"
        if ($entry != "." && $entry != ".."  && strpos($entry,'.php') != false && strpos($entry,'test')!=false) {
			$str .= 
			'
			<iframe width="100%" height="300px" src="' . $entry . '">
			</iframe>';
        }
    }
	echo $str;
    closedir($handle);
}