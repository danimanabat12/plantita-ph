 
<?php

session_start();
include('../config/db.php');
if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
 header('location:login.php');
}
?>
<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<title>Admin Dashboard</title>
<html>
<head>
	<style>
		body{
			margin: 0, auto;
		}
		
		div{
			background-color: white;
			margin: 5rem 15rem;
		}
		
		p{
			padding: 1rem 1rem;
			text-align: center;
		}
		
		@media screen and (max-width: 800px){
			div{
				background-color: white;
				margin: 5rem 5rem;
			}
		}
	</style>
</head>
<body>
	<div>
		<p>“Plants are more courageous than almost all human beings: 
		an orange tree would rather die than produce lemons, 
		whereas instead of dying the average person would rather be someone they are not.”
																	<br><b>― Mokokoma Mokhonoana</b>
		</p>
	</div>
	<div>
		<p>“I remember my childhood names for grasses and secret flowers. 
		I remember where a toad may live and what time the birds awaken in the summer
		-- and what trees and seasons smelled like -- how people looked and walked and smelled even.
		The memory of odors is very rich.”
																	<br><b>― John Steinbeck, East of Eden</b>
		</p>
	</div>
	<div>
		<p>“No risk is more terrifying than that taken by the first root. 
		A lucky root will eventually find water, but its first job is to anchor 
		-- to anchor an embryo and forever end its mobile phase, 
		however passive that mobility was. Once the first root is extended, 
		the plant will never again enjoy any hope (however feeble) of relocating 
		to a place less cold, less dry, less dangerous. 
		Indeed, it will face frost, drought, and greedy jaws without any possibility of flight.
		The tiny rootlet has only once chance to guess what the future years, 
		decades -- even centuries -- will bring to the patch of soil where it sits. 
		It assesses the light and humidity of the moment, refers to its programming, 
		and quite literally takes the plunge.”
																	<br><b>― Hope Jahren, Lab Girl</b>
		</p>
	</div>
	<div>
		<p>“A passionate look, touch or a hug on a plant is enough 
		to open your inner eyes than going for a serious yoga and other therapies.”
																	<br><b>― Karthikeyan V</b>
		</p>
	</div>
	<div>
		<p>“Organic foods are richer in nutrients. 
		This means they improve satiety and naturally help regulate body weight…
		Plants produce antioxidants to protect themselves from pests like insects and to withstand harsh weather.</b> 
		When they’re treated with chemicals such as pesticides, 
		they don’t need to produce as much of their own natural defenses, 
		so the levels are lower.” (p.203)”
																	<br><b>― Cynthia Sass, Cinch! Conquer Cravings, Drop Pounds, and Lose Inches</b>
		</p>
	</div>
</body>
</html>


