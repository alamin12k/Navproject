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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question19/q19.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";
    
    $percentage = $_GET['percent'];


   echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 19</h4>
        <p>Write a program to enter the %age of a student & print whether he is PASS or FAIL.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Percentage:</label>
                <small class='form-text text-muted'>$percentage</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($percentage <= 100) {
                                if ($percentage >= 50) {
                                    echo "<div class='alert alert-info'><strong>PASS</strong></div>";
                                }
                                else {
                                    echo "<div class='alert alert-warning'><strong>FAIL</strong></div>";
                                }
                               }
                               else {
                                echo "<div class='alert alert-danger'><strong>Percentage is greater than 100</strong></div>";
                               }
echo "                  </div>
                    </div>
                </div>
            </div>
        </div>";

?>