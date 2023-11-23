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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                    </li>
                    <li class='nav-item' id='sli'>
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question17/q17.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";


    $number = $_GET['num'];
    
    if ($number > 0) {
        $result = "<div class='alert alert-info'><strong>$number is positive</strong></div>";
    }
    else {
        $result = "<div class='alert alert-danger'><strong>$number is negative</strong></div>";
    }

    echo "<div class='alert alert-secondary' role='alert' id='question'>
    <h4 class='alert-title'>Question 17</h4>
    <p>Write a program to find whether a no is positive or negative.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>Number</label>
            <small class='form-text text-muted'>$number</small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card text-center'>
                    <div class='card-body'>
                        <h5 class='card-title'>Result</h5>
                        <h6 class='card-subtitle'>$result</h6>
                    </div>
                </div>
            </div>    
        </div>
    </div>";

?>