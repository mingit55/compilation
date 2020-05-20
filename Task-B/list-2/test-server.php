<?php

$fileCount = count($_FILES);
echo "입력받은 {$fileCount}개의 결과 : ";
foreach($_FILES as $key => $file) {
    echo "<br />";
    echo "<h4>$key</h4>";
    echo "<pre>";
    var_dump($file);
    echo "</pre>";
}