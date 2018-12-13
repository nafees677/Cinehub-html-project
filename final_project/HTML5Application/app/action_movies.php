<?php
?>
<html>
    <head><title>Action Movies</title>
    <link rel="stylesheet" href="style.css">
    </head>
    
    
    <body>
        <div id="container">
<div id="head">
    <h1 id="head1"> <b style="color:blue">C</b>
	 <b style="color:yellow">I</b>
	 <b style="color:black">N</b>
	 <b style="color:green">E</b>
         <b style="color:black">-</b>
	 <b style="color:brown">B</b>
	 <b style="color:purple">A</b>
	 <b style="color:green">S</b>
	 <b style="color:blue">E</b>         
</h1>
</div>
    <div id="nav">
        <ul class="ul">
            <li class="li"><a href="home.php">Home</a></li>
            <li class="li"><a href="#">Category</a>
                <ul class="ul">
                    <li class="li"><a href="action_movies.php">Action</a></li>
                    <li class="li"><a href="#">Adventure</a></li>
                    <li class="li"><a href="#">Drama</a></li>
                    <li class="li"><a href="#">Thriller</a></li>
                    <li class="li"><a href="#">Horror</a></li>
                    <li class="li"><a href="#">Science Fiction</a></li>
                </ul>
            
            </li>
            <li class="li"><a href="#">Latest Movies</a></li>
            <li class="li"><a href="#">Contact Us</a></li>
            <li class="li"><a href="#">Login</a></li>
            <li class="li"><a href="registration.php">Registration</a></li>
        </ul> 
    </div>
            <div class="body">
                <ul class="ul2">
           
                <li class="li2">
                <input type="checkbox" name="thor1">
                <br/>
                <img src="./action/thor.jpg" width="200" height="250">
                <a href="#" class="name"><h3>Thor: The Dark World</h3></a>   
                
            </li>
            <li class="li2">
                <input type="checkbox" name="ironman">
                <br/>
                <img src="./action/iron.jpg" width="200" height="250">
               
                <a href="#" class="name"><h3>Iron Man</h3></a>    
                
            </li>
            <li class="li2">
                <input type="checkbox" name="civilwar">
                <br/>
                <a href="captain.php"><img src="./action/civil.jpg" width="200" height="250"></a>
                <a href="captain.php" class="name"><h3>Captain America:Civil War</h3></a>
                
            </li>
            <li class="li2">
                <input type="checkbox" name="bvss">
                <br/>
                <img src="./action/bvss.jpg" width="200" height="250">
                <a href="#" class="name"><h3>Batman vs Superman</h3></a>
                
            </li>
            <li class="li2">
                <input type="checkbox" name="ww" value="ww">
                <br/>
                <a href="ww.php"><img src="./action/ww.jpg" width="200" height="250"></a>
                <a href="ww.php" class="name"><h3>Wonder Woman</h3></a>
                
            </li>
        </ul>
                <h1 class="order"> <a href="#"><img src="on.png" width="200"></a></h1>
        </div>
        </div>
    </body>
</html>
