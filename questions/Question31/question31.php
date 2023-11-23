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
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/questions/Question31/q31.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


    $name = $_GET['nm'];
    $message = $_GET['mg'];

    $c = 0;

    // while ($c <= 10) {
    //     $rice = $name ;
    //     echo "</br></br>";
    //     $c++;
    // }

    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading text-center'>Question 31</h4>
        <p class='text-center'>Write a program to print a name and a message 10 times.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Name: </label>
                <small class='form-text text-muted'>$name</small>
            </div>
            <div class='form-group'>
                <label for=''>Message: </label>
                <small class='form-text text-muted'>$message</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
            
                            while ($c <= 10) {
                                echo "$name </br> $message";
                                echo "</br></br>";
                                echo "<h6 class='card-subtitle'></h6>";
                                $c++;
                            }

                        echo    "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";







?>

