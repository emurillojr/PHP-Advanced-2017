
<?php

include './autoload.php';
$file_path = filter_input(INPUT_GET, 'filePath');
$finfo = new finfo(FILEINFO_MIME_TYPE);
$type = $finfo->file($file_path);
//Get file path and info
$filePath = new SplFileInfo($file_path);
$pathinfo = pathinfo($file_path);
$extension = $pathinfo['extension'];

include './template/detailFiles.html.php';

        