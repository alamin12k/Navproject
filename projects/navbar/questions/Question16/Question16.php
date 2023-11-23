<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";    

    $number = $_GET['num'];

    if ($number % 2 == 0) {
        $det = "<div class='alert alert-success'><strong>$number is an even number</strong></div>";
    }
    else {
        $det = "<div class='alert alert-success'><strong>$number is an odd number</strong></div>";
    }

    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 16</h4>
        <p>Write a program to find whether a no. is even or odd.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Number:</label>
                <small class='form-text text-muted'>$number</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Number</h5>
                            <h6 class='card-subtitle'>$det</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>
