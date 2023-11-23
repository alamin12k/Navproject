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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question24/q24.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

  

    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 24</h4>
        <p>Write a program to show the use of conditional operator (Greater among two numbers)</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>First Number:</label>
                <small class='form-text text-muted'>$num1</small>
            </div>
            <div class='form-group'>
                <label for=''>Second Number:</label>
                <small class='form-text text-muted'>$num2</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($num1 > $num2 && $num2 < $num1) {
                                echo "<div class='alert alert-info'><strong>$num1 is greater than $num2</strong></div>";
                            }
                            else {
                                echo "<div class='alert alert-info'><strong>$num2 is greater than $num1</strong></div>";
                            }
        echo "          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";


?>