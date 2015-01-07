<?php


//1st lesson Jan. 6, 2014

	//1st example 
	class shoe{
		public $new = "tbh";
		public $color = "idek";

		function getMoney(){
			return "{$this->new}" . "{$this->color}";
		}
	}

	$pair = new shoe();
	$pair->new = "Nike Airmax Patta";
	$pair->color = " in 'Cherrywood' ";

	print "The shoes I want are {$pair->getMoney()}.";

	//2nd example
	class videogame{
		public $game = "tbh";
		public $console = "idek";

		function getGood(){
			return "{$this->game}" . "{$this->console}";
		}
	}

	$mlg = new videogame();
	$mlg->game = "Advanced Warfare";
	$mlg->console = " for xbox one ";

	print "The game I want is {$mlg->getGood()}.";

	//3rd example
	class fangirling{
		public $show1 = "tbh";
		public $show2 = "idek";

		function getAmazing(){
			return "{$this->show1}" ." and " . "{$this->show2}";
		}
	}

	$fangirl = new fangirling();
	$fangirl->show1 = "Sherlock";
	$fangirl->show2 = "Supernatural";

	print "The shows I like are {$fangirl->getAmazing()}.";

?>