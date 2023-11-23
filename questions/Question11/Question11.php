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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question11/q11.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $temp = $_POST['temp'];
    $unit = $_POST['temprature']; 
        
    if ($unit == "˚Celcius") {
        $calc = ($temp - 32) * 5 / 9;
        $nunit = "˚Farenheit";
        $round_num = round($calc, 2);
    } 
    elseif ($unit == "˚Farenheit") {
        $calc = (9 * $temp) / 5 +32;
        $nunit = "˚Celcius";
        $round_num = round($calc, 2);
    }       
    
    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 11</h4>
        <p>Write a program to convert temperature from degree Celsius to Fahrenheit & vice-versa. Use the formula : F=9C/5 + 32</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Given Temprature:</label>
                <small class='form-text text-muted'>$temp ˚</small>
            </div>
            <div class='form-group'>
                <label for=''>Unit:</label>
                <small class='form-text text-muted'>$nunit</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>New Temprature</h5>
                            <h6 class='card-subtitle'>$round_num$unit</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
?>

