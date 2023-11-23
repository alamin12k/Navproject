<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";
    
    $age = $_GET['age'];

    if ($age < 18 || $age > 90) {
        $eligibility = "<div class='alert alert-warning'><strong>You are not eligible to cast your vote.</strong></div>";
    }
    else {
        $eligibility = "<div class='alert alert-dark'><strong>You are eligible to cast your vote.";
    }

    echo "<div class='alert alert-dark' role='alert' id='question'>
        <h4 class='alert-heading text-center'>Question 13</h4>
        <p class='text-center'>Write a program to read the age of a candidate and determine whether it is eligible for casting his/her own vote.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Age:</label>
                <small class='form-text text-muted'>$age years</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Eligibility</h5>
                            <h6 class='card-subtitle'>$eligibility</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

