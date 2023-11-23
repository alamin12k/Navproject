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
                            <a class='nav-link bg-danger text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li>
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-danger text-white active' id='navbutton' href='http://localhost/navproject/questions/Question20/q20.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $year = $_GET['yr'];

   



    echo "<div class='alert alert-danger' role='alert' id='question'>
        <h4 class='alert-title'>Question 20</h4>
        <p>Write a program to check whether a given year is leap or not.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Year: </label>
                <small class='form-text text-muted'>$year</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($year % 4 == 0 && $year % 400 == 0 && $year % 100 != 0) {
                                echo "<div class='alert alert-info'><strong>$year is a leap year</strong></div>";
                            }
                            elseif ($year % 4 !== 0) {
                                echo "<div class='alert alert-warning'><strong>$year is not a leap year</strong></div>";
                            }
                            else {
                                echo "<div class='alert alert-danger'><strong>Error</strong></div>";
                            }
echo "                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
?>