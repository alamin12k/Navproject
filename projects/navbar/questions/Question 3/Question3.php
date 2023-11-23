<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";

    // echo "3. Write a program to input principal, rate, time & find the simple interest.";
    // echo "<br/>";

    // echo "<br/>";
    // print_r($_GET);
    $principal = $_GET['p'];
    $rate = $_GET['r'];
    $time = $_GET['t'];
    $interest = ($principal * $rate * $time) / 100;

    echo "<div class='alert alert-primary' role='alert' id='question3'>
    <h4 class='alert-heading'>Question 3</h4>
    <p>3. Write a program to input principal, rate, time & find the simple interest.</p>
    <hr>
    <div class='container'>
        <p>The formula for simple interest is I=PRT/100.</p>
        <div class='form-group'>
            <label for=''>Principle: </label>
            <small class='form-text text-muted'>$principal</small>
        </div>
        <div class='form-group'>
            <label for=''>Rate: </label>
            <small class='form-text text-muted'>$rate%</small>
        </div>
        <div class='form-group'>
            <label for=''>Time: </label>
            <small class='form-text text-muted'>$time years</small>
        </div>
        <hr>
        <div class='card' style='width: 16rem;'>
            <div class='card-body'>
                <h5 class='card-title'>Simple Interest</h5>
                <h6 class='card-subtitle mb-2 text-muted'>$interest</h6>
            </div>
        </div>
    
    </div>
</div>
";

    // echo "<br/><br/>";
    // echo "The formula for simple interest is I=PRT/100";
    // echo "<br/> <br/>";
    // echo "When: P = £".$principal;
    // //echo "<br/><br/>";
    // echo ", R = ".$rate;
    // echo "%";
    // //echo "<br/><br/>";
    // echo ", T = ".$time;
    // echo "years";
    // echo "<br/><br/>";
    // echo "The simple interest is = ";
    // //echo "<br/> <br/>";
    // echo "£".$interest;

?>




