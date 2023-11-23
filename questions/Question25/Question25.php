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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question25/q25.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    
    $num1 = $_POST['num1'];

    

    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 25</h4>
        <p>Write a program to check whether the given number is even or odd (By using conditional operator).</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Number:</label>
                <small class='form-text text-muted'>$num1</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($num1 % 2 == 0 && $num1 > 0) {
                                echo "<div class='alert alert-info'><strong>$num1 is an even number</strong></div>";
                            }
                            elseif ($num1 % 2 != 0 && $num1 > 0) {
                                echo "<div class='alert alert-warning'><strong>$num1 is an odd number</strong></div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'><strong>ERROR</strong></div>";
                            }
    echo "              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";


?>