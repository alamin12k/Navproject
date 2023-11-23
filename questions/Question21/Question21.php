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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question21/q21.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    
    $grade = $_GET['grades'];

   
    
       

    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 21</h4>
        <p>Write a program in C# Sharp to accept a grade and declare the equivalent description</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Grade: </label>
                <small class='form-text text-muted'>$grade</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($grade == "A") {
                                echo "<div class='alert alert-info'><strong>Excellent</strong></div>";
                            }
                            elseif ($grade == "B") {
                                echo "<div class='alert alert-info'><strong>Very Good</strong></div>";
                            }
                            elseif ($grade == "C") {
                                echo "<div class='alert alert-info'><strong>Good</strong></div>";
                            }
                            elseif ($grade == "D") {
                                echo "<div class='alert alert-warning'><strong>Pass</strong></div>";
                            }
                            elseif ($grade == "E") {
                                echo "<div class='alert alert-warning'><strong>Fair</strong></div>";
                            }
                            elseif ($grade == "F") {
                                echo "<div class='alert alert-danger'><strong>Fail</strong></div>";
                            }
                            else {
                                echo "Error";
                            }
echo "                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>