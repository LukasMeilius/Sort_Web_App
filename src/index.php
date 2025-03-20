<?php
    $file_path = '../data/input.txt';

    $numbers = file_exists($file_path) ? array_map('intval', file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))
    : die("Error: File not found!");
    
    sort($numbers); 

