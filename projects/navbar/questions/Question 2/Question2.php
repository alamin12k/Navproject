<?php

echo "<html>
     <head>
     <link rel='stylesheet' href='css/bootstrap.css'>
     <link rel='stylesheet' href='style.css'>
     </head>


</html>";


     // echo "2. Write a program to input 2 no’s from the user & do their addition, subtraction, multiplication & division.";
     // echo "<br/>";
     // echo "<br/>";

     // print_r($_GET);
     // echo "<br/><br/>";
     
     $num1 = $_GET['n1'];
     $num2 = $_GET["n2"];
     $add = $num1 + $num2;
     $sub = $num1 - $num2;
     $mul = $num1 * $num2;
    
     $div = 0; $status = 1;
     if ($num2 == 0) {
          $status = 0;
          
     }
     else {
          $status = 1;
          $div = $num1 / $num2;     
     }
     
     $res= $status==0? "<div class='alert alert-warning'>Error<div/>":"<h6 class='card-subtitle mb-2 text-muted'>$div</h6>";

     echo "<div class='alert alert-info' role='alert' id='question'>
     <h4 class='alert-heading'>Question 2!</h4>
     <p>2. Write a program to input 2 no’s from the user & do their addition, subtraction, multiplication & division.</p>
     <hr>
     <div class='container'>
        <div class='form-group'>
             <label for='exampleInputEmail1'>First number</label>
             <small id='emailHelp' class='form-text text-muted'>$num1</small>
        </div>
        <div class='form-group'>
             <label for='exampleInputPassword1'>Second Number</label>
             <small id='emailHelp' class='form-text text-muted'>$num2</small>
        </div>
        <hr>
        <div class='row'>
             <div class='col-sm-6'>
                  <div class='card' style='width: 18rem;'>
                       <div class='card-body'>
                            <h5 class='card-title'>Addition</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$add</h6>
                            
                       </div>
                  </div>
             </div>
             <div class='col-sm-6'>
                  <div class='card' style='width: 18rem;'>
                       <div class='card-body'>
                            <h5 class='card-title'>Sub</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$sub</h6>
                            
                       </div>
                  </div>
             </div>
   
        </div>
        <div class='row'>
             <div class='col-sm-6'>
                  <div class='card' style='width: 18rem;'>
                       <div class='card-body'>
                            <h5 class='card-title'>Mul</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$mul</h6>
                            
                       </div>
                  </div>
             </div>
             <div class='col-sm-6'>
                  <div class='card' style='width: 18rem;'>
                       <div class='card-body'>
                            <h5 class='card-title'>Division</h5>
                            $res                            
                       </div>
                  </div>
             </div>
   
        </div>
     </div>
   </div>
   ";

     // $add = $num1 + $num2;
     // echo "The addition of ".$num1;
     // echo " and ".$num2; 
     // echo " = ".$add;
     // echo "<br/><br/>";

     // $sub = $num1 - $num2;
     // echo "The subtraction of ".$num1;
     // echo " from ".$num2; 
     // echo " = ".$sub;
     // echo "<br/><br/>";

     // $mul = $num1 * $num2;
     // echo "The multiplication of ".$num1;
     // echo " and ".$num2; 
     // echo " = ".$mul;
     // echo "<br/><br/>";

     
     // if ($num2 == 0) {
     //      echo "Error<br/> Zero cannot be the denominator.";
     //      echo "<div class='alert alert-warning'>Error<div/>";
     // }
     // else {
     //      $div = $num1 / $num2;
     //      echo "The division of ".$num1;
     //      echo " and ".$num2; 
     //      echo " = ".$div;
     //      echo "<br/><br/>";

     // }


?>

