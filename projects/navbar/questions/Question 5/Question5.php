<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
                <link rel='stylesheet' href='style.css'>
            </head>
        </html>";

    $sub1 = $_POST['s1'];
    $sub2 = $_POST['s2'];
    $sub3 = $_POST['s3'];
    $sub4 = $_POST['s4'];
    $sub5 = $_POST['s5'];
    $percentage = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 500 * 100;

    echo "<div class='alert alert-info' role='alert' id='question5'>
    <h4 class='alert-heading'>Question 5</h4>
    <p>5. Write a program to enter marks of a student in 5 subjects & calculate the percentage.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>Subject 1: </label>
            <small class='form-text text-muted'>$sub1</small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 2: </label>
            <small class='form-text text-muted'>$sub2</small>
        </div>
        <div class='from-group'>
            <label for=''>Subject 3: </label>
            <small class='form-text text-muted'>$sub3</small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 4: </label>
            <small class='form-text text-muted'>$sub4</small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 5: </label>
            <small class='form-text text-muted'>$sub5</small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>Percentage </h5>
                        <h6 class='card-subtitle'>$percentage%</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    
    // echo "5. Write a program to enter marks of a student in 5 subjects & calculate the percentage.";
    // echo "<br/><br/>";

    // print_r($_POST);


    // echo "<br/><br/>";
    
    // if(isset($_POST['s1']) && isset($_POST['s2']) && isset($_POST['s3']) && isset($_POST['s4']) && isset($_POST['s5']))
    // {
    //     $sub1 = $_POST['s1'];
    //     if ($_POST['s1'] > 100) {
    //         echo "Invalid Number";
    //         echo "<br/>";
    //     }
    //     elseif ($sub1 == NULL) {
    //         echo "Input a value<br/>";
    //     }
    //     else {
    //         echo "The score of Subject 1 = ".$sub1;
    //         echo "<br/>";
    //     }
        

    //     $sub2 = $_POST['s2'];
    //     if ($_POST['s2'] > 100) {
    //         echo "Invalid Number";
    //         echo "<br/>";
    //     }
    //     elseif ($sub2 == NULL) {
    //         echo "Input a value<br/>";
    //     }
    //     else {
    //         echo " The score of Subject 2 = ".$sub2;
    //         echo "<br/>";
    //     }

    //     $sub3 = $_POST['s3'];
    //     if ($_POST['s3'] > 100) {
    //         echo "Invalid Number";
    //         echo "<br/>";
    //     }
    //     elseif ($sub3 == NULL) {
    //         echo "Input a value<br/>";
    //     }
    //     else {
    //         echo " The score of Subject 3 = ".$sub3;
    //         echo "<br/>";
    //     }

    //     $sub4 = $_POST['s4'];
    //     if ($_POST['s4'] > 100) {
    //         echo "Invalid Number";
    //         echo "<br/>";
    //     }
    //     elseif ($sub4 == NULL) {
    //         echo "Input a value<br/>";
    //     }
    //     else {
    //         echo "The score of Subject 4 = ".$sub4;
    //         echo "<br/>";
    //     }

    //     $sub5 = $_POST['s5'];
    //     if ($_POST['s5'] > 100) {
    //         echo "Invalid Number";
    //         echo "<br/>";
    //     }
    //     elseif ($sub5 == NULL) {
    //         echo "Input a value<br/>";
    //     }
    //     else {
    //         echo "The score of Subject 5 = ".$sub5;
    //         echo "<br/><br/>";
    //     }

    //     $percentage = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 500 * 100;
            
            
    //     if ($percentage > 100) {
    //         echo "Input the right scores";
    //     }
    //     else {
    //         echo "The percentage of the 5 scores is = ".$percentage;
    //         echo "%";
    //     }
        
    // }
    // else { 
    //     echo "Subject does not have a score ";
    //     echo "<br/>";
    // }



?>

