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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question10/q10.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

        $var1 = $_GET['v1'];
        $var2 = $_GET['v2'];

        echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 10</h4>
        <p>Write a program to swap 2 no’s without using a third variable.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Variable 1:</label>
                <small class='form-text text-muted'>";
                
                    if ($var1 == NULL) {
                        echo "Input a number";
                    }
                    else {
                        echo "$var1";
                    }
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 2</label>
                <small class='form-text text-muted'>";
                
                
                    if ($var2 == NULL) {
                        echo "Input a number";
                    }
                    else {
                        echo "$var2";
                    }
echo "          </small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-6'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 1 = $var1 + $var2</h5>";

                            if ($var1 == NULL || $var2 == NULL) {
                                echo "Invalid Input";
                            }
                            else {
                                $var1 = $var1 + $var2;
                                echo "Variable 1 = $var1";
                                echo "<br/>";
                                echo "(Variable 1 = Variable 1 + Variable 2)";
                            }

echo "                  </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 2 = $var1 - $var2</h5>";
                            
                            if ($var1 == NULL || $var2 == NULL) {
                                echo "Invalid Input";
                            }
                            else {
                                $var2 = $var1 - $var2;
                                echo "Variable 2 = $var2";
                                echo "<br/>";
                                echo "(Variable 2 = Variable 1 - Variable 2)";
                            }
                            
echo "                  </div>
                    </div>
                </div>
            </div> <br>
            <div>
                <div class='col-sm-12'>
                     <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 1 = $var1 - $var2</h5>";
                    
                                if ($var1 == NULL || $var2 == NULL) {
                                    echo "Invalid Input";
                                }
                                else {
                                    $var1 = $var1 - $var2;
                                    echo "Variable 1 = $var1";
                                    echo "<br/>";
                                    echo "(Variable 1 = Variable 1 - Variable 2)";
                                }
                    
echo "                  </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>";
    
    

    

    
    
   



?>

