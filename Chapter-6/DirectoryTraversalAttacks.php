<!-- page # 227 -->

<?php
$file = $_GET['file']; // User-supplied input
$path = '/var/www/files/'; // Base directory// Read the file
$contents = file_get_contents($path. $file);
// Display the file contents
echo $contents;?>
