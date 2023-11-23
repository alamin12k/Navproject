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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question38/q38.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $i = 1;
    $sum = 0;
    $add = $i;
    $times = 0;


    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 38</h4>
        <p>Write a program to print the squares of 1st 10 natural numbers and their sum.</p>
        <hr>
        <div class='container'>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card' style='width: 15rem;'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>Squares</h5>";
                            
                            while ($i <= 10) {
                                $square = $i * $i;
                                $sum = $times + $square;
                                $times = $sum;
                               echo "$square  <br>";
                               
                            

                                $i++;

                            }
                            echo " The sum of the squares = $times";
            echo "      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

