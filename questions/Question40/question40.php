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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question40/q40.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $i = 1;

        
    echo "<div class='alert alert-info' role='alert' id='question'> 
        <h4 class='alert-heading'>Question 40</h4>
        <p>Write a program to print even nos. out of first 100 numbers.</p>
        <hr>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Even Numbers</h5>";
                            
                            while ($i <= 100) {
                                if ($i % 2 == 0) {
                                    echo "$i,   ";

                                }
                                $i++;
                            }

            echo "      </div>
                    </div>
                </div>
            </div>
        </div>";

?>

