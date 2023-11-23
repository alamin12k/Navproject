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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question44/q44.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $num = $_GET['num'];
    $x = 0;
    $n = $num;

    echo "<div class='alert alert-success' role='alert' id='question'>
            <h4 class='alert-heading'>Question 44</h4>
            <p>Write a program to to check whether the entered number is Palindrome or not.</p>
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
                            <div class='card-body text-center'>
                                <h5 class='card-title'>Result</h5>";

                                while (floor($num)) {
                                    $mod = $num % 10;
                                    $x = $x * 10 + $mod;
                                    $num = $num / 10; 
                                }
                                if ($x == $n) {
                                    echo "$n is a Palindrome";
                                }
                                else {
                                    echo "$n is not a Palindrome";
                                }
                                

    echo "                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";


?>