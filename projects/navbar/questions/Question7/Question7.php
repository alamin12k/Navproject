<?php

    echo "<html>
        <head>
        <link rel='stylesheet' href='bootstrap/bootstap.css'>
        <link rel='stylesheet' href='style.css'>
        </head>
        </html>";



    
    $a = $_GET['a'];
    $b = $_GET['b'];

    $i = ($a + $b) * ($a + $b);
    $ii = ($a + $b) * ($a + $b) * ($a + $b);
    $iii = ($a * $a) - ($b * $b);


    echo "<div class='alert alert-info' role='alert' id='question'>
    <h4 class='alert-heading'>Question 7!</h4>
    <p>Write a program to calculate<br/>i. (a+b)² <br/> ii. (a+b)^3 <br/> iii. (a²-b²) <br/></p>
    <hr id='hr1'>
    <div class='container'>
        <div class='form-group'>
            <label for=''>a:</label>
            <small class='form-text text-muted'>$a</small>
        </div>
        <div class='form-group'>
            <label for=''>b:</label>
            <small class='form-text text-muted'>$b</small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-6'>
                <div class='card' style='width: 15rem'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a+b)²</h5>
                        <h6 class='card-subtitle'>$i</h6>
                    </div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div class='card' style='width: 15rem'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a²-b²)</h5>
                        <h6 class='card-subtitle'>$iii</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card' style='width: 15rem'>
                    <div class='card-body'>
                        <h5 class='card-title'>(a+b)^3</h5>
                        <h6 class='card-subtitle'>$ii</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";



?>

