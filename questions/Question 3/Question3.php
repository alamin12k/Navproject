<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            </head>
            <body>
                <div class='container mt-3'>
                    <ul class='nav nav-pills'>
                        <li class='nav-item'>
                            <a class='nav-link active ' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                         <a class='nav-link text-white ' id='navbutton' href='http://localhost/navproject/questions/Question%203/q3.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                    </ul>
                </div>
            </body>

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




