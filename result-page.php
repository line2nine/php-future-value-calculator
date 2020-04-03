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
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $investment = $_POST["investment"];
    $rate = $_POST["rate"];
    $year = $_POST["year"];
    $old_investment = $investment;
    for ($i = 0; $i < $year; $i++) {
        $future_value = $investment + ($investment * $rate * 0.01);
        $investment = $future_value;
    }
}
?>
<div>
    <form method="post" action="result-page.php">
        <table>
            <tr>
                <td><h2>Future Value Calculator</h2></td>
                <td></td>
            </tr>
            <tr>
                <td>Investment Amount:</td>
                <td><?php echo "$" . $old_investment ?></td>
            </tr>
            <tr>
                <td>Yearly Interest Rate:</td>
                <td><?php echo $rate . "%" ?></td>
            </tr>
            <tr>
                <td>Number of Years:</td>
                <td><?php echo $year ?></td>
            </tr>
            <tr>
                <td>Future Value:</td>
                <td><?php echo "$" . $investment ?></td>
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