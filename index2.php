<?php
function myCallBack($item) {
    return strlen($item);
}

$string = ["apple", "arange", "banana", "coconut"];
$lengths = array_map("myCallBack", $string);
print_r($lengths);
?> 

<?php
    function exclaim($str) {
        return $str . "! ";
    }

    function ask($str) {
        return $str . "? ";
    }

    function printFormatted($str, $format) {
        echo $format($str);
    }

    printFormatted("Hello word", "exclaim");
    printFormatted("Hello Word", "ask");
?>

<?php
    $age = '{"Peter":35, "Ben":37, "Joe":43}';
    $obj = json_decode($age);
    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
?>

<?php
$aArray = ["Ban", "That", "Tuyet", "Voi", "Khi", "Xem", "Den", "Day"];
    $varSerialize = serialize($aArray);
    echo "<pre>";
    print_r($varSerialize);
    echo "</pre>";
?>

<?php
$aArray = ["Ban", "That", "Tuyet", "Voi", "Khi", "Xem", "Den", "Day"];
echo json_encode($aArray);
?>