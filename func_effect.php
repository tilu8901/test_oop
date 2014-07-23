<?php 
	class func_effects
	{
		private $effect;
		//These are the three predefined effects the from document
		private $EFFECT1 = 'effect1';
		private $EFFECT2 = 'effect2';
		private $EFFECT3 = 'effect3';
		
		function __construct($effect){
			$this->effect = $effect;
		}
		public function change_effect($image){
			if(!is_string($this->effect)){ //String check
				echo "[Error] - Effect Is Not A String, No Changes Applied.<br>";
			}
			else{
					$new_image = $image;
					$new_effect = $this->effect;
					if(strcmp($new_effect,$this->EFFECT1)==0){
						$new_image = $this->apply_effect1($this->image);
						echo "New Effect: '$this->EFFECT1' Has Been Applied.<br>";
						return $new_image;
					}
					else if(strcmp($new_effect,$this->EFFECT2)==0){
						$new_image = $this->apply_effect2($this->image);
						echo "New Effect: '$this->EFFECT2' Has Been Applied.<br>";
						return $new_image;
					}
					else if(strcmp($new_effect,$this->EFFECT3)==0){
						$new_image = $this->apply_effect3($this->image);
						echo "New Effect: '$this->EFFECT3' Has Been Applied.<br>";
						return $new_image;
					}
					else{
						echo "[Error] - Effect '$this->effect' Not Found, No Changes Applied.<br>";
					}
				}
		}
		private function apply_effect1($image){ //The image manipulation for 'effect1' is done here.
			$new_image = $image;
			/*
			* Apply "effect1" Here
			*/
			return $new_image;
		}
		private function apply_effect2($image){ //The image manipulation for 'effect2' is done here.
			$new_image = $image;
			/*
			* Apply "effect2" Here
			*/
			return $new_image;
		}
		private function apply_effect3($image){ //The image manipulation for 'effect3' is done here.
			$new_image = $image;
			/*
			* Apply "effect3" Here
			*/
			return $new_image;
		}
		public function __get($property) {
			if (property_exists($this, $property)) {
				return $this->property;
			}
		}
		public function __set($property, $value) {
			if (property_exists($this, $property)) {
				$this->property = $value;
			}
			return $this;
		}
		
	
	}
	
	
?>