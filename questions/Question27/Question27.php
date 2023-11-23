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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question27/q27.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

   

    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    



    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 27</h4>
        <p>Write a program to calculate the percentage of a student in 5 subjects and then find his grade accordingly.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Subject 1: </label>";
                if ($sub1 > 100) {
                    echo "<small class='form-text text-muted'>Score is greater than 100</small>";
                }
                else {
                    echo "<small class='form-text text-muted'>$sub1</small>";
                }
    echo "  </div>
            <div class='form-group'>
                <label for=''>Subject 2: </label>";
                if ($sub2 > 100) {
                    echo "<small class='form-text text-muted'>Score is greater than 100</small>";
                }
                else {
                    echo "<small class='form-text text-muted'>$sub2</small>";
                }
    echo "  </div>
            <div class='form-group'>
                <label for=''>Subject 3: </label>";
                if ($sub3 > 100) {
                    echo "<small class='form-text text-muted'>Score is greater than 100</small>";
                }
                else {
                    echo "<small class='form-text text-muted'>$sub3</small>";
                }
    echo "  </div>
            <div class='form-group'>
                <label for=''>Subject 4: </label>";
                if ($sub4 > 100) {
                    echo "<small class='form-text text-muted'>Score is greater than 100</small>";
                }
                else {
                    echo "<small class='form-text text-muted'>$sub4</small>";
                }   
    echo "  </div>
            <div class='form-group'>
                <label for=''>Subject 5: </label>";
                if ($sub5 > 100) {
                    echo "<small class='form-text text-muted'>Score is greater than 100</small>";
                }
                else {
                    echo "<small class='form-text text-muted'>$sub5</small>";
            
                }
    echo "  </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>"; 
                        
                            $percentage = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 500 * 100;
                            if ($percentage > 100) {
                                echo "<div class='alert alert-danger'><strong>ERROR</strong></div";
                            }
                            else {
                                echo "<div class='alert alert-info'><strong>The percentage = $percentage %</strong></div>";
                                
                            }
                            
                            
                        
                            if ($percentage <= 100 && $percentage > 80) {
                                echo "<div class='alert alert-info'><strong>The grade is = A</strong></div>";
                                echo "<br/>";
                            }
                            elseif ($percentage <= 80 && $percentage > 70) {
                                echo "<div class='alert alert-info'><strong>The grade is = B</strong></div>";
                                echo "<br/>";
                            }
                            elseif ($percentage <= 70 && $percentage > 60) {
                                echo "<div class='alert alert-info'><strong>The grade is = C</strong></div>";
                                echo "<br/>";
                            }
                            elseif ($percentage <= 60 && $percentage > 50) {
                                echo "<div class='alert alert-info'><strong>The grade is = D</strong></div>";
                                echo "<br/>";
                            }
                            elseif ($percentage < 50 && $percentage > 40) {
                                echo "<div class='alert alert-info'><strong>The grade is = E</strong></div>";
                                echo "<br/>";
                            }
                            elseif ($percentage <= 40) {
                                echo "<div class='alert alert-info'><strong>The grade is = F</strong></div>";
                                echo "<br/>";
                            }
                            else {
                                echo "<div class='alert alert-danger'><strong>ERROR</strong></div>";
                                echo "<br/>";
                            }
                        
    echo "              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";


?>