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
                    </li> &nbsp &nbsp
                    <li class='nav-item' id='sli'>
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question33/q33.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $n = $_GET['n'];
    $a = 1;
    $sum = 0;

    echo "<div class='alert alert-info' role='alert' id='question'>
        <h4 class='alert-heading'>Question 33</h4>
        <p>Write a program to print first N natural numbers and their sums.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>N:</label>
                <small class='form-text text-muted'>$n</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-white' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Sum of N Natural Numbers</h5>";
                            
                            while ($a <= $n) {
                                // echo "When N = $n <br>";
                                echo " $a <br>";
                                $sum += $a; 
                                
                                $a++;
                            }
                            echo "The Sum of first $n natural numbers = $sum <br> <br>";
            echo "      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";



?>

