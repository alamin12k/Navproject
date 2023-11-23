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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question45/q45.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $num = $_GET['num'];
    $count = ceil(log10($num));
    $x = 0;
    $n = $num;
    $z = 0;

    echo "<div class='alert' role='alert' id='question'>
            <h4 class='alert-heading'>Question 45</h4>
            <p>Write a program to check whether the entered no. is Armstrong no. or not.</p>
            <hr>
            <div class='container'>
                <div class='form-group'>
                    <label for=''>Number: </label>
                    <small class='form-text text-muted'>$num</small>
                </div>
                <hr>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card text-center'>
                            <div class='card-body'>
                                <h5 class='card-title'>Result</h5>";

                                 while (floor($num)) {
                                    $mod = $num % 10;
                                    $m = $mod ** $count;
                                    $add = $z + $m;
                                    $z = $add;
                                    $num = $num / 10; 
                                }
                                if ($z == $n) {
                                    echo "$n is an Armstrong Number.";
                                }
                                else {
                                    echo "$n is not an Armstrong Number.";
                                }

        echo "              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";


?>

