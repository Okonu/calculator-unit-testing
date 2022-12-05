<?php require_once "./Calculator.php";

//when the submit btton has been clicked

if (isset($_POST['submit'])) {

    //checking number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;
    }

    //calculating totals
    if ($_POST['operation'] == 'plus') {
        $total = $calculator->add($_POST['number1'], $_POST['number2']);
    } else if ($_POST['operation'] == 'minus') {
        $total = $calculator->subtract($_POST['number1'], $_POST['number2']);
    } else if ($_POST['operation'] == 'times') {
        $total = $calculator->multiply($_POST['number1'], $_POST['number2']);
    } else if ($_POST['operation'] == 'divided by') {
        $total = $calculator->divide($_POST['number1'], $_POST['number2']);
    }
}
