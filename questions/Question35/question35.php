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
                        <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question35/q35.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";

    $a = 10;
    $b = 2;
    $c = 10;
    

    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-heading'>Question 35</h4>
        <p>Write a program to print the following series: <br>
            i.	10,9,8,…..1 <br>
            ii.	2,4,6,8,…..20 <br>
            iii.10,13.5,17,20.5 <br>
        </p>
        <hr>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-sm-6'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Series 1</h5>";

                            while ($a >= 1) {
                                echo "$a, ";
                                $a--;
                            };
    echo "              </div>
                    </div>
                </div>    
                <div class='col-sm-6'>    
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Series 3</h5>";

                            while ($b <= 20) {
                                echo "$b, ";
                                $b = $b + 2;
                            };
echo "                  </div>
                    </div>
                </div>
            </div><br>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Series 2</h5>";

                            while ($c <= 20.5) {
                                echo "$c, ";
                                $c+=3.5;
                            }
        echo "          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

