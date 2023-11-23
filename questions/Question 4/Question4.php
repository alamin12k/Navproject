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
                            <a class='nav-link' id='navbutton' href='http://localhost/navproject/navproject.html'><i class='fa fa-home'></i>Home</a>
                        </li> &nbsp
                        <li class='nav-item' id='sli'>
                            <a class='nav-link active' id='navbutton' href='http://localhost/navproject/questions/Question%204/q4.html'><i class='fa fa-arrow-left'></i> Back </a>
                        </li>
                    </ul>
                </div>
            </body>
        </html>";



    $π = 3.14;
    $radius = $_GET['rd'];
    $Area = $π * ($radius * $radius);
    $length = $_GET['l'];
    $breadth = $_GET['b'];
    $area = $length * $breadth;
    $Length = $_GET['l'];
    $Length2 = $_GET['l'];
    $as = $Length * $Length2;

    echo "<div class='alert alert-info' role='alert' id='question4'>
    <h4 class='alert-heading'>Question 4</h4>
    <p>4. Write a program to print area of circle, rectangle & square.</p>
    <hr>
    <div class='container'>
        <div class='form-group'>
            <label for=''>π: </label>
            <small claa='form-text text-muted'>$π</small>
        </div>
        <div class='form-group'>
            <label for=''>Radius: </label>
            <small class='form-text text-muted'>$radius</small>
        </div>
        <div class='form-group'>
            <label for=''>Length: </label>
            <small class='form-text text-muted'>$length</small>
        </div>
        <div class='form-group'>
            <label for=''>Breadth: </label>
            <small class='form-text text-muted'>$breadth</small>
        </div>
        <hr>
        <div class='row'>
            <div class='col-sm-6'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>Area of a circle</h5>
                        <p>The formula for calculating the area of a circle is πr^2.</p>
                        <h6 class='card-subtitle'>Area = $Area</h6>
                    </div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>Area of a square</h5>
                        <p>The formula for calculating the area of a square is length * length.</p>
                        <h6 class='card-subtitle'>Area = $as</h6>        
                    </div>
                </div>
            </div>
        </div><br>
        <div class='row'>
            <div class='col-sm-34'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>Area of a rectangle</h5>
                        <p>The formula for calculating the area of a rectangle is length * breadth.</p>
                        <h6 class='card-subtitle'>Area = $area</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
"



   
    // echo "4. Write a program to print area of circle, rectangle & square.";
    // echo "<br/><br/>";

    // //Area of a circle = πr^2
    // print_r($_GET);
    // 
    // echo "<br/><br/>";
    // echo "The formula for calculating the area of a circle is πr^2.";
    // echo "<br/>";
    // echo "When π = 3.14, and r = ".$radius;
    // echo "˚";
    // echo "<br/>";
    // echo " The Area of a circle = ".$Area; 
    // echo "m²";
    // echo "<br/><br/>";

    // //Area of a rectangle = l * b
    // 
    // echo "The formula for calculating the area of a rectangle is l * b.";
    // echo "<br/>";
    // echo "When l = ".$length; 
    // echo " and b = ".$breadth;
    // echo "<br/>";
    // echo " The Area of a rectange = ".$area;
    // echo "m²";
    // echo "<br/><br/>";
    

    // //Area of a square = l * l
    // ;
    // echo "The formula for calculating the area of a square is l * l.";
    // echo "<br/>";
    // echo "When l = ".$Length; 
    // echo " and l = ".$Length2;
    // echo "<br/>";
    // echo " The Area of a square = ".$as;
    // echo "m²";
    

    




?>


