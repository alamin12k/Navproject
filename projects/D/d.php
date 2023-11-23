<?php



print_r($_POST);
echo "<br/><br/>";

if (isset($_POST['n1'||'n2'])) {
    
    echo "can i <br/>";
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $add = $num1 + $num2;
    echo "$add";
}
else {
    echo "Error";
}



?>