<?php
// Desired folder structure
$structure = './' . $_POST["fullName"] . '/';

// To create the nested structure, the $recursive parameter 
// to mkdir() must be specified.

if (!mkdir($structure, 0777, true)) {
    die('Folder already exist.');
}
else {
	echo $_POST["fullName"];
}

// ...
?>