<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="./styles.css">
    <script src="script.js" defer></script>
</head> 
<body>
    <div class="wrapper">
        <p>Height in CM:
            <input type="text" id="height"><br><span id="height_error"></span>
        </p>

        <p>Weight in KG:
            <input type="text" id="weight"><br><span id="weight_error"></span>
        </p>

        <button id="btn">Calculate</button>
        <p id="output"></p>
        <button onclick="window.location.href='index1.html';">Continue</button>
    </div>
</body>
</html>