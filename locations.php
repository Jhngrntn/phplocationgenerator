<!DOCTYPE html>
<html>
	<head>
		
	</head>
	
	
	<body>
		<?php
			$locale = array("city", "town", "harbor", "trailor park", "village", "tavern", "orphanage", "college campus");
			
			$country = array("United States", "France", "England", "Canada", "New Zealand", "Russia", "Norway", "Ukraine");
			
			$climate = array("amidst the dead of winter", "amidst the heat of summer", "during the fall", "during the spring");
			
			$rand1 = array_rand($locale, 1);
			$rand2 = array_rand($country, 1);
			$rand3 = array_rand($climate, 1);
			
			echo "A ".$locale[$rand1]." in ".$country[$rand2]." ".$climate[$rand3].".";
		?>

	</body>
</html>
