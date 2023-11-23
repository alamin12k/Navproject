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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question41/q41.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

        $n = $_GET['num'];
        $i = 1;
        $n1 = 0;
        $n2 = 1; 

        
        echo "<div class='alert alert-warning' role='alert' id='question'> 
        <h4 class='alert-heading'>Question 41</h4>
        <p>Write a program Print the Fibonacci series up to n numbers.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>N: </label>
                <small class='form-text text-muted'>$n</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Fibonacci Series</h5>";
                            
                            echo "$n1, $n2, ";
                            while ($i <= $n - 2) {
                               $n3 = $n1 + $n2;
                               echo "$n3, ";
                               $n1 = $n2;
                               $n2 = $n3;
                               $i++;

                            }

            echo "      </div>
                    </div>
                </div>
            </div>
        </div>";



?>