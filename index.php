<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div>
    <form method="post" action="result-page.php">
    <table>
        <tr>
            <td><h2>Future Value Calculator</h2></td>
            <td></td>
        </tr>
        <tr>
            <td>Investment Amount:</td>
            <td><input type="text" name="investment"></td>
        </tr>
        <tr>
            <td>Yearly Interest Rate:</td>
            <td><input type="text" name="rate"></td>
        </tr>
        <tr>
            <td>Number of Years:</td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Calculate"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>