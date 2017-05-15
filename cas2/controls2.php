<!DOCTYPE html>
<html>
<head>
	<title>Controls 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<h3>
	<?php 

	switch(rand(1,5)){

		case 1:
			echo "You didn't pass the exam" ;
			break;
			
		case 2:
			echo "You can do a lot better" ;
			break;

		case 3:
			echo "You can do better" ;
			break;

		case 4:
			echo "Good" ;
			break;

		case 5:
			echo "Excellent" ;
			break;				

	}



	 ?>

</h3>	

<p>



	<?php 

	$year = 1994;
	$sign =  (1994-4) % 12;

	switch($sign){

		case 0:
			echo "Rat" ;
			break;

		case 1:
			echo "Ox" ;
			break;
			
		case 2:
			echo "Tiger" ;
			break;

		case 3:
			echo "Rabbit" ;
			break;

		case 4:
			echo "Dragon" ;
			break;

		case 5:
			echo "Snake" ;
			break;	

		case 6:
			echo "Horse" ;
			break;

		case 7:
			echo "Goat" ;
			break;

		case 8:
			echo "Monkey" ;
			break;

		case 9:
			echo "Rooster" ;
			break;

		case 10:
			echo "Dog" ;
			break;

		case 11:
			echo "Pig" ;
			break;			

	}



	 ?>

	 <?php 

	 $x = rand(1,15);
	 while($x < 10){
	 	echo "Hello <br>";
	 	$x++;
	 }

	 echo "After while";


	  ?>

	  <?php 

	  	$x = rand(1,20);
	 		while($x < 20){
	 			$calc = $x % 2;
	 			if($calc==0){
	 				echo "$x <br/>";

	 			}
	 			else{
	 				echo "$x  ";
	 			}
	 	
	 	
	 	$x++;
	 }



	   ?>

	   <?php 
	   $i = rand(1,20);
	   		while($i <= 20){

	   			echo "<div class='box'></div>";

	   			if($i%2 == 0){

	   				echo"<div class='clear'></div>";
	   			}

	   			$i++;
	   		}

	    ?>

</p> 

</body>
</html>