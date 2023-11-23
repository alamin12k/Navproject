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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question39/q39.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $n = $_GET['num'];
    $i = 1;
    $p = 1;
    $average = 0;


    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 39</h4>
        <p>Write a program to print the product and average of 1st N natural numbers.</p>
        <hr>
        <div class='container'>
            <label for=''>N: </label>
            <small class='form-text text-muted'>$n</small>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Answer</h5>";
                            
                            while ($i <= $n) {
                                $product = $p * $i;
                                $p = $product;
                                $average = ($average + $i);
                                // $a = $average;

                                $i++;

                            }
                            $av = $average / $n;
                            echo "The product = $p <br>";
                            echo "The average = $av";

echo "                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

