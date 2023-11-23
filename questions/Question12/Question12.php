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
                            <a class='nav-link bg-danger text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li>
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-danger text-white active' id='navbutton' href='http://localhost/navproject/questions/Question12/q12.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";
    $basicsalary = $_GET['bs'];
    $DA = (40 / 100) * $basicsalary;
    $HRA = (20 / 100) * $basicsalary;
    $grosssalary = $basicsalary + $DA + $HRA;

    echo "<div class='alert alert-danger' role='alert' id='question'>
        <h4 class='alert-heading text-center'>Question 12</h4>
        <p class='text-center'>Write a program to calculate the Gross Salary of an employee.
            Assume <br/> Gross Salary=Basic Salary+DA+HRA<br/>
            DA=40% of Basic Salary<br/>
            HRA=20% of Basic Salary</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Basic Salary: </label>
                <small class='form-text text-muted'>$basicsalary</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Gross Salary</h5>
                            <h6 class='card-subtitle'>$grosssalary</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

