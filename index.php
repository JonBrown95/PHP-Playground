<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <h2>PHP Calculator</h2>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number">
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    $num1 = $num2 = $operator = $result = '';

    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
    }

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
    }

    echo "<h3>Result: $result</h3>";
    ?>

</body>

</html>