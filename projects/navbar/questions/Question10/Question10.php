<?php

    echo "<html>
            <head>
            <link rel='stylesheet' href='bootstrap/bootstap.css'>
            <link rel='stylesheet' href='style.css'>
            </head>
        </html>";

        $var1 = $_GET['v1'];
        $var2 = $_GET['v2'];

        $var1 = $var1 + $var2;
        $var2 = $var1 - $var2;
        $var1 = $var1 - $var2;

        echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 10</h4>
        <p>Write a program to swap 2 no’s without using a third variable.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Variable 1:</label>
                <small class='form-text text-muted'>$var1</small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 2</label>
                <small class='form-text text-muted'>$var2</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-6'>
                    <div class='card text-center' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 1 = $var1 + $var2</h5>
                            <h6 class='card-subtitle'>Variable 1 = $var1</h6>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='card text-center' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 2 = $var1 - $var2</h5>
                            <h6 class='card-subtitle'>Variable 2 = $var2</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    
    echo "Variable 1 = ".$var1;
    echo "<br/>";
    echo "Variable 2 = ".$var2;
    echo "<br/><br/>";

    echo "Variable 1 = $var1 + $var2 ";
    $var1 = $var1 + $var2;
    echo "= $var1";
    echo "<br/>";
    echo "(Variable 1 = Variable 1 + Variable 2)";
    echo "<br/><br/>";

    echo "Variable 2 = $var1 - $var2 ";
    $var2 = $var1 - $var2;
    echo "= $var2";
    echo "<br/>";
    echo "(Variable 2 = Variable 1 - Variable 2)";
    echo "<br/><br/>";
    
    echo "Variable 1 = $var1 - $var2 ";
    $var1 = $var1 - $var2;
    echo "= $var1";
    echo "<br/>";
    echo "(Variable 1 = Variable 1 - Variable 2)";



?>

