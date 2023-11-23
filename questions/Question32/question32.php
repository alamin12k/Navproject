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
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/questions/Question32/q32.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $i = 1;

    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading text-center'>Question 32</h4>
        <p class='text-center'>Write a program to print the first 10 natural numbers.</p>
        <hr>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>First 10 Natural Numbers</h5>";
                            while ($i <= 10) {
                                echo "$i";
                                echo "<h6 class='card-subtitle'><h6>";
                                $i++;
                                
                            };
                echo "   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    



?>

