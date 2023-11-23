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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question22/q22.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


    $jambscore = $_POST['jscore'];
    $utmescore = $_POST['pscore'];

    echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 9</h4>
        <p>22.	Write a C# Sharp program to find the eligibility of admission for a professional course based on the following criteria:<br/>
        i.	Jamb score >=180 <br/>
        ii.	Post utme >=170</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Jamb Score: </label>
                <small class='form-text text-muted'>$jambscore</small>
            </div>
            <div class='form-group'>
                <label for=''>Post Utme Score:</label>
                <small class='form-text text-muted'>$utmescore</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            if ($jambscore < 180 || $utmescore < 170) {
                                echo "<div class='alert alert-danger'><strong>You are not eligible for admission</strong></div>";
                            }
                            else {
                                echo "<div class='alert alert-info'><strong>You are eligible for admission</strong></div>";
                            }
echo "                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>