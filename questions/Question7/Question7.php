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
                            <a class='nav-link  active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link  active' id='navbutton' href='http://localhost/navproject/questions/Question7/q7.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";



    
    $a = $_GET['a'];
    $b = $_GET['b'];

    
    
   


    echo "<div class='alert alert-info' role='alert' id='question'>
    <h4 class='alert-heading'>Question 7</h4>
    <p>Write a program to calculate<br/>i. (a+b)² <br/> ii. (a+b)^3 <br/> iii. (a²-b²) <br/></p>
    <hr id='hr1'>
    <div class='container'>
        <div class='form-group'>
            <label for=''>a:</label>
            <small class='form-text text-muted'>";
            
                if ($a == NULL) {
                    echo "Input the value of a.";
                }
                else {
                    echo "$a";
                }
echo "      </small>
        </div>
        <div class='form-group'>
            <label for=''>b:</label>
            <small class='form-text text-muted'>";
            
                if ($b == NULL) {
                    echo "Input the value of b.";
                }
                else {
                    echo "$b";
                }
echo "      </small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-6'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a+b)²</h5>";

                            if ($a == NULL || $b == NULL) {
                                echo "Invalid Input";
                            }
                            else {
                                $i = ($a + $b) * ($a + $b);
                                echo "<h6 class='card-subtitle'>$i</h6>";
                            }
                        
    echo "          </div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a²-b²)</h5>";

                            if ($a == NULL || $b == NULL) {
                                echo "Invalid Input";
                            }
                            else {
                                $ii = ($a + $b) * ($a + $b) * ($a + $b);
                                echo "<h6 class='card-subtitle'>$ii</h6>";
                            }
                            
    echo "          </div>
                </div>
            </div>
        </div><br>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a+b)^3</h5>";

                        if ($a == NULL || $b == NULL) {
                            echo "Invalid Input";
                        }
                        else {
                            $iii = ($a * $a) - ($b * $b);
                            echo "<h6 class='card-subtitle'>$iii</h6>";
                        } 
                        
    echo "          </div>
                </div>
            </div>
        </div>
    </div>
</div>";



?>

