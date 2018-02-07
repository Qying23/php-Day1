<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	

	
	<h1> 
		<?php      //excercise 1 print my Name
		$name = "My name is Ying";	   
		echo "Hello " . $name . "\n";
		?>	
	</h1>

	<h2>
		<?php 		//excercise 2 create if else
		$d=date("l"); //unbedingt l einsetzen um den heute tag zu erhalten
		if ($d=="Monday")
		 echo "Happy, Monday!";
			else
			 echo "Have a nice day!";
		?>
	</h2>

	<h3>
		<?php 		//excercise 3 create if else for a week
		$today = date("l");
		if ($today === "Monday") {
			echo "Happy $today" .  "<br>";
		} elseif ($today === "Tuesday") {
			echo "Huhu " . $today .  "<br>";
		} elseif ($today === "Wednesday") {
			echo "Yeah " . $today .  "<br>";
		}elseif ($today === "Thursday") {
			echo "Huhu " . $today .  "<br>";
		}elseif ($today === "Friday") {
			echo "I love " . $today .  "<br>";
		}elseif ($today === "Saturday") {
			echo "Great " . $today .  "<br>";
		}elseif ($today === "Sunday") {
			echo "Still " . $today .  "<br>";
		}else
			echo "Have a nice day!";
		?>
	</h3>

	<h2>
		<?php    //excercise 4 Create a for loop which will print your name 50 times on the screen. 
		for ($i=0; $i < 50; $i++){
			echo "Ying ";
		}
		echo "<br/>";
		echo "<br/>";

		//excercise 4 Create a do while loop which will print your name 40 times on the screen. 

		$i=0;
		do {
			echo "Qi ";
			$i++;
		} while ($i < 40);
		?>
	</h2>

	<h1>
		<?php         //excercise 5 Define an numeric array with 9 elements. Use foreach loop to output the value of every array's element.  
		$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9);
		foreach( $array as $value )
		{
		 echo "Value is $value <br />";
		}

		$cars = array("BMW", "Tesla", "Audi", "Fiat", "Toyota", "Ford");
		foreach ($cars as $value) {
			echo "<p>$value</p>";
		}
		echo count($cars );
		echo "<br/>";
		

		$Country = array( "Japan", "Bali", "Greek", "Italy", "Iceland", "Korea", "Vietnam", "Russia", "Spain");
		foreach( $Country as $value )
		{
 			echo "I want to go to $value <br>";
		}
		echo count($Country );
		?>
	</h1>
	<h2>
		<?php

		/* Beispiel/Example :First method to associate create array. */

		$salaries = array(
		 "mark" => 2000,
		 "anthony" => 1000,
		 "eric" => 500
		 );

		echo "Salary of mark is ". $salaries['mark'] . "<br />";
		echo "Salary of anthony is ". $salaries['anthony']. "<br />";
		echo "Salary of eric is ". $salaries['eric']. "<br />";


		/* Second method to create array. */

		$salaries['mark'] = "high";
		$salaries['anthony'] = "medium";
		$salaries['eric'] = "low";

		echo "Salary of mark is ". $salaries['mark'] . "<br />";
		echo "Salary of anthony is ". $salaries['anthony']. "<br />";
		echo "Salary of eric is ". $salaries['eric']. "<br />";

		?>

	</h2>

	<h1>
		<?php
		//associative array
		$comics = array(
			"Calvin & Hobbes" => "Bill Watterson",
			"Sin City" => "Frank Miller",
			"Hellboy" => "Mike Magnola",
			"Asterix" => "Goscinny & Uderzo"
		);
		foreach ($comics as $key => $value) {
			echo "<p>$key -- $value</p>";
		}
		echo "<hr>";
		//multidimensional array
		$comics2 = array(
			"Comic Strips" => array (
				"Calvin & Hobbes" => "Bill Watterson",
				"Pogo" => "Walt Kelly",
				"Krazy Kat" => "George Herriman"
			),
			"Comic Albums" => array(
				"Asterix" => "Goscinny & Uderzo",
				"Lucky Luke" => "Morris",
				"Gaston" => "Andre Franquin"
			),
			"Graphic Novels" => array(
				"Sin City" => "Frank Miller",
				"Hellboy" => "Mike Magnola",
				"Maus" => "Art Spiegelman"
			)
		);
		foreach ($comics2 as $key => $value) {
			ob_start();
			?>
			<h4><?php echo $key; ?></h4>
			<ul>
				<?php
					foreach ($value as $key_inner => $value_inner) {
					echo "<li>$key_inner by $value_inner</li>";
					}
				?>
			</ul>
			<?php
			$content = ob_get_contents();
			ob_get_clean();
			echo $content;
		}
	?>
	</h1>


</body>
</html>