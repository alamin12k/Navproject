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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question18/q18.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";


    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if ($num1 == $num2) {
        $result = "<div class='alert alert-info'><strong>The numbers are equal</strong></div>";
    }
    else {
        $result = "<div class='alert alert-danger'><strong>The numbers are not equal</strong></div>";
    }
   

    echo "<div class='alert alert-secondary' role='alert' id='question'>
    <h4 class='alert-title'>Question 18</h4>
    <p>Write a program to accept two integers and check whether they are equal or not.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>Integer 1: </label>
            <small class='form-text text-muted'>$num1</small>
        </div>
        <div class='form-group'>
            <label for=''>Integer 2:</label>
            <small class='form-text text-muted'>$num2</small>
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