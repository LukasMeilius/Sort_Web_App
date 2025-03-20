<?php
    $file_path = '../data/input.txt';

    $numbers = file_exists($file_path) ? array_map('intval', file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))
    : die("Error: File not found!");
    
    sort($numbers); 

    $max_number = !empty($numbers) ? max($numbers) : 0;

    foreach ($numbers as $num) {
    $sorted_numbers[] = "<li>".htmlspecialchars($num)."</li>" ;
}
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sorting_task</title>
</head>
<body>
    <div class="container">
        <h1>Sorted numbers</h1>
        <ul> 
            <?php echo join($sorted_numbers); ?>    
        </ul>
        <input type="text" id="numberInput" value="<?php echo $max_number ?>" readonly>
        <button onclick="increaseValue()">+5</button>
        <button onclick="decreaseValue()">-5</button>
    </div>
    <script>
        function increaseValue() {
            let inputField = document.getElementById("numberInput");
            let currentValue = parseInt(inputField.value);
            inputField.value = currentValue + 5;
        }

        function decreaseValue() {
            let inputField = document.getElementById("numberInput");
            let currentValue = parseInt(inputField.value);
            inputField.value = Math.max(0, currentValue - 5); 
        }
    </script>
</body>
</html>
