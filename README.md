# 🔢 Sorting Numbers Web App
A simple PHP-based web application that reads numbers from a file, sorts them, and displays them in an HTML list.

## ✨ Features
- 📂 Reads numbers from input.txt file.  
- 🔄 Sorts numbers in ascending order.  
- 📃 Displays the sorted list in an HTML.  
- 🔍 Highlights the maximum number in an input field.  
- 🔼🔽 JavaScript buttons allow increasing/decreasing the max number by 5.  

## 🚀 How to Run the Project
1. 📄 Add numbers (one per line) to data/input.txt.  
2. ⚡ Start a local PHP server:  
3. Open http://localhost:8000 in your browser.
## 🖥️ PHP for Backend Processing
- 📥 Reads from input.txt and processes numbers.
- 📊 Uses sort($numbers) for sorting.
- ❌ Handles missing file errors.
## 🎛️ JavaScript for UI Interactivity
- 🔼 increaseValue() and 🔽 decreaseValue() functions allow modifying the maximum number dynamically.
- 🚫 Prevents the number from going below 0.
