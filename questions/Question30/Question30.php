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
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question30/q30.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $operators = $_POST['arithmetic'];

   


    echo "<div class='alert alert-secondary' role='alert' id='question'>
    <h4 class='alert-title'>Question 9</h4>
    <p>Write a program to swap 2 no’s by using a third variable.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>1st Number: </label>
            <small class='form-text text-muted'>$num1</small>
        </div>
        <div class='form-group'>
            <label for=''>2nd Number: </label>
            <small class='form-text text-muted'>$num2</small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card text-center'>
                    <div class='card-body'>
                        <h5 class='card-title'>Result</h5>";
                        switch ($operators) {
                            case '+':
                                $add = $num1 + $num2;
                                echo "<div class='alert alert-info'><strong>$num1 + $num2 = $add</strong></div>";
                                break;
                            case '-':
                                $sub = $num1 - $num2;
                                echo "<div class='alert alert-info'><strong>$num1 - $num2 = $sub</strong></div>";
                                break;
                            case '*':
                                $mul = $num1 * $num2;
                                echo "<div class='alert alert-info'><strong>$num1 * $num2 = $mul</strong></div>";
                                break;
                            case '/':
                                
                                if ($num2 != 0) {
                                    $div = $num1 / $num2;
                                    echo "<div class='alert alert-info'><strong>$num1 / $num2 = $div</strong></div>";
                                }
                                else {
                                    echo "<div class='alert alert-danger'><strong>Zero cannot be used as a denominator in this case.</strong></div>";
                                }
                                
                                break;
                            
                            default:
                                echo "<div class='alert alert-danger'><strong>Error</strong></div>";
                                break;
                        }
        echo "      </div>
                </div>
            </div>
        </div>
    </div>
</div>";


?>