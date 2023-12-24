<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>

<body>
    <h2>Simple PHP Calculator</h2>
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
</body>

</html>