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
                    </li> &nbsp
                    <li class='nav-item' id='sli'>
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question43/q43.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    
    $num = $_GET['num'];
    $x = 0;
    $n = $num;

    echo "<div class='alert alert-primary' role='alert' id='question'>
            <h4 class='alert-heading'>Question 43</h4>
            <p>Write a program to accept a 3 digit number from the user and print it in reverse.</p>
            <hr>
            <div class='container'>
                <div class='form-group'>
                    <label for=''>Number: </label>
                    <small class='form-text text-muted'>$num</small>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title'>Result</h5>";

                                while (floor($num)) {
                                    $mod = $num % 10;
                                    $x = $x * 10 + $mod;
                                    $num = $num / 10; 
                                }
                                echo "The reverse of $n = $x ";

    echo "                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";



?>

