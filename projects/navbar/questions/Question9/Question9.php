<?php
    // <link ref='stylesheet' href='css/bootstrap.min.css'>
    echo "<html>
            <head>
                
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link rel='stylesheet' href='style.css'>    
            </head>
        </html>";

        $var1 = $_GET['num1'];
        $var2 = $_GET['num2']; 
        $var3 = $var1;
        $var1 = $var2;
        $var2 = $var3;
        
        echo "<div class='alert alert-secondary' role='alert' id='question'>
        <h4 class='alert-title'>Question 9</h4>
        <p>Write a program to swap 2 no’s by using a third variable.</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Variable 1:</label>
                <small class='form-text text-muted'>$var1</small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 2:</label>
                <small class='form-text text-muted'>$var2</small>
            </div>
            <div class='form-group'>
                <label for=''>Variable 3:</label>
                <small class='form-text text-muted'>blank</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-6'>
                    <div class='card text-center' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 3</h5>
                            <h6 class='card-subtitle'>Variable 3 = $var1</h6>
                            <p class='card-text'>Variable 3 is now equal to the value in variable 1.</p>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='card text-center' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 1</h5>
                            <h6 class='card-subtitle'>Variable 1 = $var2</h6>
                            <p class='card-text'>Variable 1 is now equal to the value in variable 2.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 18rem;' id='card3'>
                        <div class='card-body'>
                            <h5 class='card-title'>Variable 2</h5>
                            <h6 class='card-subtitle'>Variable 2 = $var1</h6>
                            <p class='card-text'>Variable 2 is now equal to the value in variable 3.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>";


?>


 