<?php

echo '	<p id = "topLeftText" class = "white" >Bryan Saggese <br>
			Student @ <span class = "bigRed">C</span>ornell <span class = "bigRed">U</span>niversity <br>
		</p>';

echo '		<ul id = "nav">';

	/*  This function decides if the current page is the index or not. It then uses this information
		to determine the paths to other pages. This is where I satisfy the PHP requirements defined by 
		the professor in Piazza post @129 of a variable, array, 
		conditional clause, loop, and a function.*/

			function chooseArray() {

				$linksIfIndex = array("HOME"=>"index.php", "INSPIRATION"=>"pages/about.php", "INTERESTS"=>"pages/location.php", "CONTACT"=>"pages/contact.php");
				$linksElse = array("HOME"=>"../index.php", "INSPIRATION"=>"about.php", "INTERESTS"=>"location.php", "CONTACT"=>"contact.php");
				$choosenArray = Array();

				if(basename($_SERVER['PHP_SELF']) == "index.php") {
					$chosenArray = $linksIfIndex;
				}
				else {
					$chosenArray = $linksElse;
				}
				return $chosenArray;
			}

			foreach(chooseArray() as $navItem=>$navLink) {
				echo "<li><a href=$navLink>$navItem</a></li>";
			}

echo '		</ul>';

?>