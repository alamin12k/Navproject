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
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link text-white active' id='navbutton' href='http://localhost/navproject/questions/Question47/q47.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";


$r = 0;
$a = 0;
$b = 0;
$c = 1;


    echo "<div class='alert' role='alert' id='question'>
            <h4 class='alert-heading'>Question 47</h4>
            <p>Write a program to do following: 
                <div class='row'>
                    <div class='col-sm-6'>
                        i. <br>
                            1 <br>
                            1 &nbsp; 2 <br>
                            1 &nbsp;	2 &nbsp;	3 <br>
                            1 &nbsp;	2 &nbsp;	3 &nbsp;	4 <br>
                            1 &nbsp;	2 &nbsp;	3 &nbsp;	4 &nbsp;	5

                    </div>
                    <div class='col-sm-6'>
                        ii.	<br>
                            1 <br> 
                            2 &nbsp;	2 <br>
                            3 &nbsp;	3 &nbsp;	3 <br>
                            4 &nbsp;	4 &nbsp;	4 &nbsp;	4 <br>
                            5 &nbsp;	5 &nbsp;	5 &nbsp;	5 &nbsp;	5 <br><br>

                    </div>
                    <div class='col-sm-6'>
                        iii. <br>	
                            1 <br>
                            2 &nbsp;	3 <br>
                            4 &nbsp;	5 &nbsp;	6 <br>
                            7 &nbsp;	8 &nbsp;	9 &nbsp;	10

                    </div>
                    <div class='col-sm-6'>
                        iv.	<br>

                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 <br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 &nbsp;	2 &nbsp;	1 <br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1&nbsp; 	2 &nbsp;	3 &nbsp;	2 &nbsp;	1 <br>
                        &nbsp; &nbsp; &nbsp;1 &nbsp;	2 &nbsp;	3 &nbsp;	4 &nbsp;	3 &nbsp;	2 &nbsp;	1 &nbsp; <br>
                        &nbsp;1 &nbsp;	2 &nbsp;	3 &nbsp;	4 &nbsp;	5 &nbsp;	4 &nbsp;	3 &nbsp;	2 &nbsp;	1 &nbsp;

                    </div>
                </div>
            </p>
            <hr>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'>Number 1</h5>";

                                while ($r < 5) {
                                    $l = $r + 1; $j = 0;
                                    while ($j < $l) {
                                        echo ($j + 1). "&nbsp; &nbsp;"; 
                                        $j++;
                                    }
                                    echo "<br>";
                                    $r++;
                                }

                                // for($i = 0; $i <= 5; $i++){  
                                //     for($j = 1; $j <= $i; $j++) {  
                                //         echo $j;  
                                //     }  
                                //     echo "<br>";  
                                // }  

        echo "              </div>
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> Number 2</h5>";
                                
                                while ($a < 5) {
                                    $p = $a + 1; $z = 0;
                                    while ($z < $p) {
                                        echo ($p). "&nbsp; &nbsp;"; 
                                        $z++;
                                    }
                                    echo "<br>";
                                    $a++;
                                }
                echo "      </div>
                        </div>
                    </div>
                </div><br>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> Number 3</h5>";

                            //    $k = 1;
                            //    while ($b < 4) {
                            //     $m = 0;
                            //     while ($m <= $b) {
                            //         echo "$k &nbsp; &nbsp";
                            //         $k++;
                            //         $m++;
                            //     }
                            //     echo "<br>";
                            //     $b++;
                            //    }
                                $k = 1;
                               while ($b < 4) {
                                $m = $b + 1; $w = 0;
                                while ($w < $m) {
                                    echo ($k). "&nbsp; &nbsp;"; 
                                    $w++;
                                    $k++;
                                }
                                echo "<br>";
                                $b++;
                            }

            echo "          </div>
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> Number 4</h5>";
                                // $rows = 5; // Number of rows in the pyramid

                                // for ($i = 1; $i <= $rows; $i++) {
                                //     // Print leading spaces to align the numbers
                                //     echo str_repeat("&nbsp;", ($rows - $i) * 4);
                                
                                //     // Print ascending numbers
                                //     for ($j = 1; $j <= $i; $j++) {
                                //         echo $j . "&nbsp;&nbsp;";
                                //     }
                                
                                //     // Print descending numbers (except 1 for the middle number)
                                //     for ($j = $i - 1; $j >= 1; $j--) {
                                //         // if ($j >= 1) {
                                //             echo $j . "&nbsp;&nbsp;";
                                //         // }
                                //     }
                                
                                //     echo "<br>";
                                // }

                                $rows = 5; //number pf rows in the pyramid
                                $i = 1;
                                while ($i <= $rows) {
                                    //print leading spaces to align the numbers
                                    echo str_repeat("&nbsp;", ($rows - $i) * 4);
                                    
                                    $j = 1;
                                    //print ascending numbers
                                    while ($j <= $i) {
                                        echo $j . "&nbsp;&nbsp;";
                                        $j++;
                                    }

                                    $j = $i - 1;
                                    // Print descending numbers
                                    while ($j >= 1) {
                                        echo $j. "&nbsp;&nbsp;";
                                        $j--;
                                    }
                                    echo "<br>";
                                    $i++;
                                }

        echo "              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";



?>

