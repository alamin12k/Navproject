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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question36/q36.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";


    $num = $_GET['num'];
    $factorial = 1;
    $fac = 1;

    echo "<div class='alert alert-dark' role='alert' id='question'> 
        <h4 class='alert-heading'>Question 36</h4>
        <p>Write a priogram to factorial of a no. <br>
            i.	Using for loop <br>
            ii.	Using while loop <br>
        </p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Number: </label>
                <small class='form-text text-muted'>$num</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>Factorial of $num</h5>
                            <h6 class='card-subtitle'>Using For Loop</h6>";
                            
                            for ($i=$num; $i>=1; $i--) {     
                                $factorial = $factorial * $i;
                               
                            }
                             echo "$factorial <br>";
        echo "          </div>
                    </div>
                </div>    
            </div><br>
            <div class='row'>        
                <div class='col-sm-12'>
                    <div class='card'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>Factorial of $num </h5>
                            <h6 class='card-subtitle'>Using While loop</h6>";

                            while ($num >= 1) {
                                $fac = $fac * $num;
                                $num--;
                            }
                            echo "$fac";
                echo "  
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>";

?>

