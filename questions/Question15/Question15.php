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
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li>
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-success text-white active' id='navbutton' href='http://localhost/navproject/questions/Question15/q15.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $height = $_GET['ht'];
    

    if ($height < 43) {
        $category = "<div class='alert alert-warning'><strong>Data does not exist</strong></div>";
    }
    elseif ($height <= 74.5) {
        $category = "<div class='alert alert-success'><strong>You are an infant</strong></div>";
    }
    elseif ($height <= 86.9) {
        $category = "<div class='alert alert-success'><strong>You are a toddler</strong></div>";
    }
    elseif ($height <= 149.1) {
        $category = "<div class='alert alert-success'><strong>You are a Child</strong></div>";
    }
    elseif ($height <= 177) {
        $category = "<div class='alert alert-success'><strong>You are a teenager or a man</strong></div>";
    }
    else {
        $category = "<div class='alert alert-warning'><strong>You are not human</strong></div>";
    }
  
    echo "<div class='alert alert-success' role='alert' id='question'>
        <h4 class='alert-heading'>Question 15</h4>
        <p>Write a program to accept the height of a person in centimeter and categorize the person according to their height.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Height:</label>
                <small class='form-text text-muted'>$height</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>Category</h5>
                            <h6 class='card-subtitle'>$category</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
?>
