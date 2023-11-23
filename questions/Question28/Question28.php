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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question28/q28.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


    $basicsalary = $_POST['basicsalary'];
    
    
   


    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 28</h4>
        <p>Write a program to calculate the Gross Salary of an employee. <br>
        Assume: <br>
        BASIC SALARY------------DA-------------------- HRA <br>
        <1500---------- 90% of Basic Salary-------10% of Basic Salary <br>
        >=1500---------98% of Basic Salary------------ 500</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Basic Salary:</label>
                <small class='form-text text-muted'>$basicsalary</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($basicsalary < 1500) {
                                $DA = (90 / 100) * $basicsalary;
                                $HRA = (10 / 100) * $basicsalary;
                                $grosssalary = floatval($basicsalary + $DA + $HRA);
                                echo "<div class='alert alert-info'><strong>The Gross Salary =  $grosssalary</strong></div>";
                            }
                            else {
                                $DA = (98 / 100) * $basicsalary;
                                $HRA = 500;
                                $grosssalary = floatval($basicsalary + $DA + $HRA);
                                echo "<div class='alert alert-info'><strong>The Gross Salary = $grosssalary</strong></div>";
                            }
            echo "      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";


?>

BASIC SALARY	DA	HRA
<1500	90% of Basic Salary	10% of Basic Salary
>=1500	98% of Basic Salary	500
