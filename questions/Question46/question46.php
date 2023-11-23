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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question46/q46.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


    $i = 2;
    $n = range(2, 100);



    echo "<div class='alert' role='alert' id='question'>
            <h4 class='alert-heading'>Question 46</h4>
            <p>Write a program to print prime nos. out of first 100 numbers.</p>
            <hr>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'>Result</h5>";

                                while ($i <= 100) {
                                    if ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0 && $i % 7 !== 0) {
                                        echo "$i ";
                                    }
                                    elseif ($i == 2 || $i == 3 || $i == 5 || $i == 7) {
                                        echo "$i ";
                                    }
                                    $i++;
                                }

    echo "                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";


?>

