<?php class func_size 
	{
		private $size;
		function __construct($size){
			$this->size = $size;
		}
		public function resize_image($image){
			if(!is_numeric($this->size)){ //Numeric Check
				echo "[Error] - Size Is Not A Number, No Changes Applied.<br>";
			}
			else{ //Size Change Will Be Performed Here
				$new_image = $image;
				$new_size = $this->size;
				/*
				* Resize Image Here
				*/
				echo "New Size: '$this->size' Has Been Applied.<br>";
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