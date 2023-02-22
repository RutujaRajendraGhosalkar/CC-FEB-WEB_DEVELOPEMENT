<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit coverter</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">Unit Converter</div>
    <form action="save.php" method="POST">
        
    <p class="top-txt">Type a value in any of the fields to convert between Length measurements:</p>
    <div class="container">
        <p>Length Converter</p>
        <div class="inputContainer">
            <label for="feet">Feet</label><input name="feet" id="feet"  oninput="convertToOthers('feet',this.value)">
        </div>
        <div class="inputContainer">
            <label for="meter">Meters</label><input name="meter" id="meter" oninput="convertToOthers('meter',this.value)">
        </div>
        <div class="inputContainer">
            <label for="inches">Inches</label><input name="inches" id="inches" oninput="convertToOthers('inch',this.value)">
        </div>
        <div class="inputContainer">
            <label for="cm">CM</label><input name="cm" id="cm" oninput="convertToOthers('cm',this.value)">
        </div>
        <div class="inputContainer">
            <label for="yards">Yards</label><input name="yards" id="yards" oninput="convertToOthers('yard',this.value)">
        </div>
        <div class="inputContainer">
            <label for="km">Kilometers</label><input name="km" id="km" oninput="convertToOthers('km',this.value)">
        </div>
        <div class="inputContainer">
            <label for="miles">Miles</label><input name="miles" id="miles" oninput="convertToOthers('mile',this.value)">
        </div>
        <button type="submit">Save data1</button>
    </div>        
    <p class="top-txt">Type a value in any of the fields to convert between weight measurements:</p>
    <div class="containerw">
        <p>Weight Converter</p>
        <div class="inputContainer">
            <label for="kg">Kilogram</label><input   name="kg" id="kg"  oninput="convertToOthers('kg',this.value)">
        </div>
        <div class="inputContainer">
            <label for="g">Gram</label><input   name="g" id="g" oninput="convertToOthers('g',this.value)">
        </div>
        <button type="submit">Save data2</button>
    </div>    
    <p class="top-txt">Type a value in any of the fields to convert between time measurements:</p>
    <div class="containert">
        <p>Time Converter</p>
        <div class="inputContainer">
            <label for="hours">Hours</label><input   name="hours" id="hours"  oninput="convertToOthers('hours',this.value)">
        </div>
        <div class="inputContainer">
            <label for="minuts">Minuts</label><input   name="minuts" id="minuts" oninput="convertToOthers('minuts',this.value)">
        </div>
        <div class="inputContainer">
            <label for="seconds">Seconds</label><input   name="seconds" id="seconds" oninput="convertToOthers('seconds',this.value)">
        </div>
        <button type="submit">Save data3</button>
    </div>      
    <p class="top-txt">Type a value in any of the fields to convert between temprature measurements:</p>
    <div class="containerte">
        <p>Temprature Converter</p>
        <div class="inputContainer">
            <label for="celsius">Celsius</label><input   name="celsius" id="celsius"  oninput="convertToOthers('celsius',this.value)">
        </div>
        <div class="inputContainer">
            <label for="fahrenheit">Fahrenheit</label><input   name="fahrenheit" id="fahrenheit" oninput="convertToOthers('fahrenheit',this.value)">
        </div>
        <button type="submit">Save data4</button>
    </div>              
    <script src="script.js"></script>
    <!-- <button type="submit">Save data</button> -->
    <!-- php -->
    
</form>
</body>
</html>