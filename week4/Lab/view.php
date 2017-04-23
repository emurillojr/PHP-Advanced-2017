<?php

include './autoload.php';
$folder = './uploads';
if (!is_dir($folder)) {
    die('Folder <strong>' . $folder . '</strong> does not exist');
}
$file = filter_input(INPUT_POST, 'file');
$util = new Util();
if (is_file($file)) {
    unlink($file);
}

$directory = new DirectoryIterator($folder);

include './template/viewFiles.html.php';
