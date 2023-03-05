<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/';
            $result = $num1 / $num2;
            break;
        default:
            $result = 0;
            break;
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="number" name="num1" value="<?php echo $num1 ?? ''; ?>">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" value="<?php echo $num2 ?? ''; ?>">
    <input type="submit" value="Calculate">
</form>
<?php if (isset($result)) echo "Result: $result"; ?>