Sorting Numbers Web App

This simple PHP-based web application reads numbers from a file, sorts them, and displays them in an HTML list. 

Features

Reads numbers from input.txt file.

Sorts numbers in ascending order.

Displays the sorted list in an HTML.

Highlights the maximum number in an input field.

JavaScript buttons allow increasing/decreasing the max number by 5.

How to Run the Project

Create a data/input.txt file and add some numbers (one per line), for example:

Start a Local PHP Server

open your local host in your browser

PHP for Backend Processing

Reads from input.txt and processes numbers.

Uses sort($numbers) for sorting.

Handles missing file errors.

JavaScript for UI Interactivity

increaseValue() and decreaseValue() functions allow for the dynamic modification of the maximum number.

Prevents the number from going below 0.

