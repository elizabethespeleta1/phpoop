<?php


//1st lesson Jan. 6, 2014

	//1st example 
	class shoe{
		public $new = "which type";
		public $color = "color";
		public $size = "1234";
		public $cost = "$$$";

		function __construct($new, $color, $size, $cost){
			$this->new = $new;
			$this->color = $color;
			$this->size = $size;
			$this->cost = $cost;
		}

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
		public $game = "aw";
		public $console = "best console";
		public $youtuber = "person";
		public $gun = "shotsfired";

		function __construct($game, $console, $youtuber, $gun){
			$this->game = $game;
			$this->console = $console;
			$this->youtuber = $youtuber;
			$this->gun = $gun;
		}

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
		public $show1 = "ioweyou";
		public $show2 = "moose";
		public $band = "om&m";
		public $band2 = "tn";

		function __construct($show1, $show2, $band, $band2){
			$this->show1 = $show1;
			$this->show2 = $show2;
			$this->band = $band;
			$this->band2 = $band2;
		}

		function getAmazing(){
			return "{$this->show1}" ." and " . "{$this->show2}";
		}
	}

	$fangirl = new fangirling();
	$fangirl->show1 = "Sherlock";
	$fangirl->show2 = "Supernatural";

	print "The shows I like are {$fangirl->getAmazing()}.";


?>