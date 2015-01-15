<?php 
	//inheritance is the means by which one or more classes can be derived from a base class
	

	//4th lesson & 5th lesson  January 13,2015 and January 14,2015
	
		//1st example
		class Person {
			public $firstName;
			public $middleName;
			public $lastName;
			public $gender;
			public $weight;
			public $write;
			public $text;

			function __construct($firstName, $middleName, $lastName, $gender, $weight, $write, $text){
				$this->firstName = $firstName;
				$this->middleName = $middleName;
				$this->lastName = $lastName;
				$this->gender = $gender;
				$this->weight = $weight;
				$this->write = $write;
				$this->text = $text;
			}

			function getName(){
				return $this->firstName . " " . $this->middleName . " " .  $this->lastName;
			}

		}

	   	class Grandma extends Person{
	    	function sayinghi(){
	   			return $this->write;
	    	}
	   	}

	   	class Cousins extends Person {
	    	function visiting(){
	    		return $this->text;
	    	}
	    }

		$abuela = new Grandma("Bertha", "Bew", "Com", "lady", "69","letter","aye");
		print "My grandma's name is " . $abuela->getName();


		//2nd example
		class Sandwich{
			public $pbnj;
			public $roastbeef;
			public $turkey;
			public $grilledcheese;
			public $cook;
			public $buy;

			function __construct($pbnj, $roastbeef, $turkey, $grilledcheese, $cook, $buy){
				$this->pbnj = $pbnj;
				$this->roastbeef = $roastbeef;
				$this->turkey = $turkey;
				$this->grilledcheese = $grilledcheese;
				$this->cook = $cook;
				$this->buy = $buy;
			}

			function getFood(){
				return " I want a " . $this->grilledcheese . " but my dad wants a " . $this->roastbeef;
			}
		}

		class Me extends Sandwich{
			function made(){
				return $this->cook;
			}
		}

		class Dad extends Sandwich{
			function bought(){
				return $this->buy;
			}
		}

		$meh = new Me ("Peanut Butter w/ Jelly sandwich", "Roast Beef sandwich", "Turkey sandwich", "Grilled Cheese w/ Bacon", "cooked", "bought");
		print $meh->getFood() . "so we went to a place with both";

		//3rd example
		class Pasta{
			public $alfredo;
			public $lasagna;
			public $spaghetti;
			public $cooks;
			public $buys;

			function __construct($alfredo, $lasagna, $spaghetti, $cooks, $buys){
				$this->alfredo = $alfredo;
				$this->lasagna = $lasagna;
				$this->spaghetti = $spaghetti;
				$this->cooks = $cooks;
				$this->buys = $buys;
			}

			function getYum(){
				return " I want a " . $this->alfredo . " but my dad wants " . $this->lasagna;
			}
		}

		class Goo extends Pasta{
			function make(){
				return $this->cooks;
			}
		}

		class Foo extends Pasta{
			function buy(){
				return $this->buys;
			}
		}

		$P = new Goo ("Alfredo", "Lasagna", "Spaghetti", "cook", "buy");
		print $P->getYum() . " so we went to a place with both";
?>