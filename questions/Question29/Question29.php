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
                        </li>
                        <li class='nav-item' id='sli'>
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question29/q29.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $day = $_POST['day'];

    



    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 9</h4>
        <p>Write a program to swap 2 no’s by using a third variable.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Day: </label>
                <small class='form-text text-muted'>$day</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            switch ($day) {
                                case '1':
                                    echo "<div class='alert alert-info'><strong>Monday</strong></div>";
                                    break;
                                case '2':
                                    echo "<div class='alert alert-info'><strong>Tuesday</strong></div>";
                                    break;
                                case '3':
                                    echo "<div class='alert alert-info'><strong>Wednesday</strong></div>";
                                    break;
                                case '4':
                                    echo "<div class='alert alert-info'><strong>Thursday</strong></div>";
                                    break;
                                case '5':
                                    echo "<div class='alert alert-info'><strong>Friday</strong></div>";
                                    break;
                                case '6':
                                    echo "<div class='alert alert-info'><strong>Saturday</strong></div>";
                                    break;
                                case '7':
                                    echo "<div class='alert alert-info'><strong>Sunday</strong></div>";
                                    break;   
                                default:
                                    echo "<div class='alert alert-danger'><strong>Input a number between 1-7</strong></div>";
                                    break;
                            }
            echo "      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
?>