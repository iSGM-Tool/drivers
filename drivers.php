
<?php
$title = "Apple Design";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #000;
    font-family: Arial, sans-serif;
}

.container {
    text-align: center;
    color: white;
}

.apple {
    font-size: 150px;
    line-height: 1;
}

h2 {
    margin-top: 20px;
    font-size: 24px;
    font-weight: 400;
    letter-spacing: 3px;
}
</style>
</head>

<body>
    <div class="container">
        <div class="apple"></div>
        <h2>Think Different.</h2>
    </div>
</body>
</html>
