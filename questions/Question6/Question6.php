<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='css/bootstrap.css'>
                <link rel='stylesheet' href='style.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            </head>
            <body>
                <div class='container mt-3'>
                    <ul class='nav nav-pills'>
                        <li class='nav-item'>
                            <a class='nav-link bg-primary active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-primary active' id='navbutton' href='http://localhost/navproject/questions/Question6/q6.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";
    
    $num1 = $_GET['n1'];
    $num2 = $_GET['n2'];
    $num3 = $_GET['n3'];
    $num4 = $_GET['n4'];
    $num5 = $_GET['n5'];
    $num6 = $_GET['n6'];
    $num7 = $_GET['n7'];

    if (isset($_GET['n1'])||isset($_GET['n2'])||isset($_GET['n3'])||isset($_GET['n4'])||isset($_GET['n5'])||isset($_GET['n6'])||isset($_GET['n7'])) {
       
        
    }
    else {
        echo "<div class='alert alert-warning' style='width: 23%; color: blue;'><strong>Error<br/> You should input values</strong></div>";
    }
    echo "
    <div class='alert alert-primary' role='alert' id='question'>
        <h4 class='alert-heading'>Question 6!</h4>
        <p>Write a program to find the average of 7 numbers</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>1st number: </label>
                <small class='form-text text-muted'>";
                    
                    if ($num1 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num1";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>2nd number:</label>
                <small class='form-text text-muted'>";
                    
                    if ($num2 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num2";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>3rd number:</label>
                <small class='form-text text-muted'>";
                
                    if ($num3 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num3";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>4th Number:</label>
                <small class='form-text text-muted'>";
                
                    if ($num4 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num4";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>5th Number:</label>
                <small class='form-text text-muted'>";
                
                    if ($num5 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num5";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>6th number:</label>
                <small class='form-text text-muted'>";
                
                    if ($num6 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num6";
                    }    
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>7th Number:</label>
                <small class='form-text text-muted'>";
                
                    if ($num7 == NULL) {
                        echo "Input a Number";
                    }
                    else {
                        echo "$num7";
                    }    
echo "          </small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card''>
                        <div class='card-body'>
                            <h5 class='card-titile'>Average</h5>";
                            
                            if ($num1 == NULL || $num2 == NULL || $num3 == NULL || $num4 == NULL || $num5 == NULL || $num6 == NULL || $num7 == NULL) {
                                echo "Incomplete Numbers";
                            }
                            else {
                                $avg = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7) / 7;
                                echo "The average = $avg ";
                            }

echo "                  </div>
                    </div>
                </div>
            </div>
        
    
        </div>
    </div>";
?>

