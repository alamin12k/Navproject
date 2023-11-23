<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to calculate and print the Electricity bill of a given customer. The customer id., name and unit consumed by the user should be taken from the keyboard and display the total amount to pay by the customer. The charges are as follow :
            Cost of Energy (Unit) in kw = N22.5.
            *To be Entered from kyboard*
            -Total Energy Consumed
            -To amount To be paid
            -Outstanding Balance.";
    echo "<br/><br/>";

    $customerid = $_POST['id'];
    $name = $_POST['name'];
    $unitconsumed = $_POST['unit'];

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


    


?>