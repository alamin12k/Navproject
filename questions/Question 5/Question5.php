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
                            <a class='nav-link bg-success active' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link bg-success active' id='navbutton' href='http://localhost/navproject/questions/Question%205/q5.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";

    $sub1 = $_POST['s1'];
    $sub2 = $_POST['s2'];
    $sub3 = $_POST['s3'];
    $sub4 = $_POST['s4'];
    $sub5 = $_POST['s5'];
   

    echo "<div class='alert alert-success' role='alert' id='question5'>
    <h4 class='alert-heading'>Question 5</h4>
    <p>5. Write a program to enter marks of a student in 5 subjects & calculate the percentage.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>Subject 1: </label>
            <small class='form-text text-muted'>";
            
                if ($_POST['s1'] > 100) {
                    echo "Invalid Number";
                    echo "<br/>";
                }
                elseif ($sub1 == NULL) {
                    echo "Input a value<br/>";
                }
                else {
                    echo "$sub1";
                }
echo "      </small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 2: </label>
            <small class='form-text text-muted'>";
        
                if ($_POST['s2'] > 100) {
                    echo "Invalid Number";
                    echo "<br/>";
                }
                elseif ($sub2 == NULL) {
                    echo "Input a value<br/>";
                }
                else {
                    echo "$sub2";
                    echo "<br/>";
                }
echo "      </small>
        </div>
        <div class='from-group'>
            <label for=''>Subject 3: </label>
            <small class='form-text text-muted'>";
               
                if ($_POST['s3'] > 100) {
                    echo "Invalid Number";
                    echo "<br/>";
                }
                elseif ($sub3 == NULL) {
                    echo "Input a value<br/>";
                }
                else {
                    echo "$sub3";
                    echo "<br/>";
                }
echo "      </small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 4: </label>
            <small class='form-text text-muted'>";
               
                if ($_POST['s4'] > 100) {
                    echo "Invalid Number";
                    echo "<br/>";
                }
                elseif ($sub4 == NULL) {
                    echo "Input a value<br/>";
                }
                else {
                    echo "$sub4";
                    echo "<br/>";
                }
echo "      </small>
        </div>
        <div class='form-group'>
            <label for=''>Subject 5: </label>
            <small class='form-text text-muted'>";
                
                if ($_POST['s5'] > 100) {
                    echo "Invalid Number";
                    echo "<br/>";
                }
                elseif ($sub5 == NULL) {
                    echo "Input a value<br/>";
                }
                else {
                    echo "$sub5";
                    echo "<br/>";
                }
echo "      </small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>Percentage </h5>";
                            if ($sub1 == NULL || $sub2 == NULL || $sub3 == NULL || $sub4 == NULL || $sub5 == NULL) {
                                echo "Incomplete Scores";
                            }
                            else{
                                $percentage = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 500 * 100; 

                                if ($percentage > 100) {
                                    echo "Input the right scores";
                                }
                                else {
                                    echo "The percentage of the 5 scores is = ".$percentage;
                                    echo "%";
                                }
                            }
                           

                        
echo "              </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    
    // echo "5. Write a program to enter marks of a student in 5 subjects & calculate the percentage.";
    // echo "<br/><br/>";

    // print_r($_POST);


    // echo "<br/><br/>";
    
    


?>

