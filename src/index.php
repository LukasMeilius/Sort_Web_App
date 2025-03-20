<?php
    $file_path = '../data/input.txt';

    $numbers = file_exists($file_path) ? array_map('intval', file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))
    : die("Error: File not found!");
    
    sort($numbers); 

    $max_number = !empty($numbers) ? max($numbers) : 0;

    foreach ($numbers as $num) {
    $sorted_numbers[] = "<li>".htmlspecialchars($num)."</li>" ;
}
        
