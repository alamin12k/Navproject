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
                            <a class='nav-link  active' id='navbutton' href='http://localhost/navproject/questions/Question42/q42.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $num = $_GET['num'];
    $i = 1;



    echo "<div class='alert alert-danger' role='alert' id='question'>
            <h4 class='alert-title'>Question 42</h4>
            <p>write a program to print table of a number</p>
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
                            <div class='card-body'>
                                <h5 class='card-title'>Multiplacation Table</h5>";

                                while ($i <= 12) {
                                    $mul = $num * $i;
                                    echo "$num x $i = $mul <br>";
                                    $i++;
                                }    

    echo "                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";

?>

