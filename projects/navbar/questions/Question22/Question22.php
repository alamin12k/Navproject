<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "22.	Write a C# Sharp program to find the eligibility of admission for a professional course based on the following criteria:<br/>
            i.	Jamb score >=180 <br/>
            ii.	Post utme >=170";
    echo "<br/><br/>";

    $jambscore = $_POST['jscore'];
    $utmescore = $_POST['pscore'];

    if ($jambscore < 180 || $utmescore < 170) {
        echo "<div class='alert alert-danger' style='width:25% ;'><strong>You are not eligible for admission</strong></div>";
    }
    else {
        echo "<div class='alert alert-info' style='width:25% ;'><strong>You are eligible for admission</strong></div>";
    }


?>