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
                            <a class='nav-link  active' id='navbutton' href='http://localhost/navproject/questions/Question8/q8.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $π = pi();
    $r = floatval($_GET['radius']);

    $circ = (2 * $π ) * $r;

    echo "
    <div class='alert alert-info' role='alert' id='question'>
        <h4 class='alert-heading'>Question 8</h4>
        <p>Write a program to find the circumference of a circle</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Radius:</label>
                <small class='form-text text-muted'>";
                
                if ($r == NULL) {
                    echo "Input a value";
                }
                else {
                    echo "$r";
                }
echo "          </small>
            </div>
            <div class='form-group'>
                <label for=''>Pi:</label>
                <small class='form-text text-muted'>$π</small>
            </div>
             <hr>
             <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Circumference</h5>";

                            if ($r == NULL) {
                                echo "Invalid input";
                            }
                            else {
                                echo "<h6 class='card-subtitle'>$circ</h6>";
                            }
                            
    echo "              </div>
                    </div>
                </div>
             </div>
        </div>
    </div>";
?>
