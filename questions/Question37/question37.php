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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question37/q37.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $add = 0;
    $sum = 0;
    $i = 4;
    
    
    
    echo "<div class='alert alert-info' role='alert' id='question'>
        <h4 class='alert-heading'>Question 37</h4>
        <p> Write a program to print sum of following series <br>
            1+1/4+1/7+1/10+1/13+1/<br>16+1/19+1/22+1/25
        </p>
        <hr>
        <div class='container'>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>Sum</h5>";

                            while ($i <= 25) {
                                if ($i == 4) {
                                     $sum = 1 + (1 / $i);
                                }
                                else {
                                    $add = $sum + (1 / $i);
                                    $sum = $add;
                                }
                               $i+= 3;
                            }
                            echo "$sum <br>";
            echo "      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

