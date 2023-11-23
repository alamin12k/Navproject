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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question26/q26.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    


    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 26</h4>
        <p>Write a program to print the largest of three numbers.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>1st Number:</label>
                <small class='form-text text-muted'>$num1</small>
            </div>
            <div class='form-group'>
                <label for=''>2nd Number:</label>
                <small class='form-text text-muted'>$num2</small>
            </div>
            <div class='form-group'>
                <label for=''>3rd Number:</label>
                <small class='form-text text-muted'>$num3</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($num1 > $num2 && $num1 > $num3) {
                                echo "<div class='alert alert-info'><strong>$num1 is the largest of the three numbers</strong></div>";
                            }
                            elseif ($num2 > $num1 && $num2 > $num3) {
                                echo "<div class='alert alert-info'><strong>$num2 is the largest of the three numbers</strong></div>";
                            }
                            else {
                                echo "<div class='alert alert-info'><strong>$num3 is the largest of the three numbers</strong></div>";
                            }
        echo "          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>