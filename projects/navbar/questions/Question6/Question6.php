<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='css/bootstrap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";
    
    $num1 = $_GET['n1'];
    $num2 = $_GET['n2'];
    $num3 = $_GET['n3'];
    $num4 = $_GET['n4'];
    $num5 = $_GET['n5'];
    $num6 = $_GET['n6'];
    $num7 = $_GET['n7'];

    if (isset($_GET['n1'])||isset($_GET['n2'])||isset($_GET['n3'])||isset($_GET['n4'])||isset($_GET['n5'])||isset($_GET['n6'])||isset($_GET['n7'])) {
        $avg = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7) / 7;
        
    }
    else {
        echo "<div class='alert alert-warning' style='width: 23%; color: blue;'><strong>Error<br/> You should input values</strong></div>";
    }
    echo "
    <div class='alert alert-info' role='alert' id='question'>
        <h4 class='alert-heading'>Question 6!</h4>
        <p>Write a program to find the average of 7 numbers</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>1st number:</label>
                <small class='form-text text-muted'>$num1</small>
            </div>
            <div class='form-group'>
                <label for=''>2nd number:</label>
                <small class='form-text text-muted'>$num2</small>
            </div>
            <div class='form-group'>
                <label for=''>3rd number:</label>
                <small class='form-text text-muted'>$num3</small>
            </div>
            <div class='form-group'>
                <label for=''>4th Number:</label>
                <small class='form-text text-muted'>$num4</small>
            </div>
            <div class='form-group'>
                <label for=''>5th Number:</label>
                <small class='form-text text-muted'>$num5</small>
            </div>
            <div class='form-group'>
                <label for=''>6th number:</label>
                <small class='form-text text-muted'>$num6</small>
            </div>
            <div class='form-group'>
                <label for=''>7th Number:</label>
                <small class='form-text text-muted'>$num7</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-titile'>Average</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$avg</h6>
                        </div>
                    </div>
                </div>
            </div>
        
    
        </div>
    </div>";
?>

