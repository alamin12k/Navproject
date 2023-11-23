<?php
    // <link ref='stylesheet' href='css/bootstrap.min.css'>
    echo "<html>
            <head>
                
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question9/q9.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

        $var1 = $_GET['num1'];
        $var2 = $_GET['num2']; 
      
        
       
        
        echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 9</h4>
        <p>Write a program to swap 2 no’s by using a third variable.</p>
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
                <label for=''>Variable 2:</label>
                <small class='form-text text-muted'>";
                
                    if ($var2 == NULL) {
                        echo "Input a number";
                    }
                    else {
                        echo "$var2";
                    }
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 3:</label>
                <small class='form-text text-muted'>blank</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-6'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 3</h5>";

                                if ($var1 == NULL || $var2 == NULL) {
                                    echo "Invalid Input";
                                }
                                else {  
                                    $var3 = $var1;
                                    echo "<h6 class='card-subtitle'>Variable 3 = $var1</h6>
                                        <p class='card-text'>Variable 3 is now equal to the value in variable 1.</p>";
                                }
                            
echo "                  </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 1</h5>";

                                if ($var1 == NULL || $var2 == NULL) {
                                    echo "Invalid Input";
                                }
                                else {  
                                    $var1 = $var2;
                                    echo "<h6 class='card-subtitle'>Variable 1 = $var2</h6>
                                    <p class='card-text'>Variable 1 is now equal to the value in variable 2.</p>";
                                }
                            
echo "                  </div>
                    </div>
                </div>
            </div><br>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 2</h5>";

                            if ($var1 == NULL || $var2 == NULL) {
                                echo "Invalid Input";
                            }
                            else {  
                                 $var2 = $var3;
                                echo "<h6 class='card-subtitle'>Variable 2 = $var3</h6>
                                <p class='card-text'>Variable 2 is now equal to the value in variable 3.</p>";
                            }
                            
echo "                  </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>";


?>


 