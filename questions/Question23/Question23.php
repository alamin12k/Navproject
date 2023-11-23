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
                        <a class='nav-link bg-primary text-white active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                    </li>
                    <li class='nav-item' id='sli'>
                        <a class='nav-link bg-primary text-white active' id='navbutton' href='http://localhost/navproject/questions/Question23/q23.html'><i class='fa fa-arrow-left'></i> Back </a>
                    </li>
                </ul>
            </div>
        </body>
        </html>";


    $customerid = $_POST['id'];
    $name = $_POST['name'];
    $unitconsumed = $_POST['unit'];

   

    echo "<div class='alert alert-primary' role='alert' id='question'>
        <h4 class='alert-title'>Question 23</h4>
        <p>Write a program to calculate and print the Electricity bill of a given customer. The customer id., name and unit consumed by the user should be taken from the keyboard and display the total amount to pay by the customer. The charges are as follow : <br>
        Cost of Energy (Unit) in kw = N22.5. <br>
        *To be Entered from kyboard* <br>
        -Total Energy Consumed <br>
        -To amount To be paid <br>
        -Outstanding Balance.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Customer id:</label>
                <small class='form-text text-muted'>$customerid</small>
            </div>
            <div class='form-group'>
                <label for=''>Name:</label>
                <small class='form-text text-muted'>$name</small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 3:</label>
                <small class='form-text text-muted'>$unitconsumed</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center text-black'>
                        <div class='card-body'>
                            <h5 class='card-title'>Result</h5>";
                            echo "Customerid = $customerid <br/>";
                            echo "Customer Name = $name <br/>";
                            echo "Unit Consumed = $unitconsumed <br/>";
                        
                            $energyconsumed = $unitconsumed;
                            echo "Energy Consumed = $energyconsumed kw";
                            echo "<br/><br/>";
                        
                            $amounttobepaid = $energyconsumed * 22.5;
                            echo "The Amount to be paid by customer = £$amounttobepaid";
                            echo "<br/><br/>";
                        
                            $outstandingbalance = $amounttobepaid;
                            echo "The outstanding balance = $outstandingbalance";
                        
echo "                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        


?>