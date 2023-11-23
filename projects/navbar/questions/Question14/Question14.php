<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";

    $m = $_GET['m'];
    
    if ($m > 0) {
        $value = "When m is larger than 0 -- n = 1";
    }
    elseif ($m == 0) {
        $value = "When m = 0 -- n = 0";
    }
    elseif ($m < 0) {
        $value = "When m is less than 0 -- n = -1";
    }
    else {
        $value = "<div class='alert alert-warning' style='width:34% ;'";
    }

    echo "<div class='alert alert-primary' role='alert' id='question'>
        <h4 class='alert-heading'>Question 14</h4>
        <p>Write a program to read the value of an integer m and display the value of n is 1 when m is larger than 0, 0 when m is 0 and -1 when m is less than 0.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Integer:</label>
                <small class='form-text text-muted'>$m</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 16rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Value of n</h5>
                            <h6 class='card-subtitle'>$value</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

