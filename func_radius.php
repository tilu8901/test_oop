<?php class func_radius 
	{
		private $radius;
		function __construct($radius){
			$this->radius = $radius;
		}
		public function change_radius($image){
			if(!is_numeric($this->radius)){ //Numeric Check
				echo "[Error] - Radius Is Not A Number, No Changes Applied.<br>";
			}
			else{ //Radius Change Will Be Performed Here
				$new_image = $image;
				$new_radius = $this->radius;
				/*
				* Change Radius Here
				*/
				echo "New Radius: '$this->radius' Has Been Applied.<br>";
				return $new_image;
			}
		}
		public function __get($property) {
			if (property_exists($this, $property)) {
				return $this->$property;
			}
		}
		public function __set($property, $value) {
			if (property_exists($this, $property)) {
				$this->$property = $value;
			}
			return $this;
		}
	
	
	}
	
?>